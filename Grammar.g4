grammar Grammar;

s: FUNC MAIN '(' ')' '{' stmts* '}' EOF;

stmts: dec | asg;

dec:
	pre lid type '=' lval	# Declv
	| pre lid type			# Decl
	| lid ':=' lval			# Sdec;

asg:
	ID '=' expr		# Asig
	| ID '+=' expr	# PlusAsig
	| ID '-=' expr	# MinusAsig
	| ID '*=' expr	# MultAsig
	| ID '/=' expr	# DivAsig;

expr:
	expr op = ('*' | '/' | '%') expr			# MulDivMod
	| expr op = ('+' | '-') expr				# AddSub
	| expr op = ('==' | '!=') expr				# EqNotEq
	| expr op = ('>=' | '<=' | '>' | '<') expr	# MoreLessEq
	| expr op = ('&&' | '||') expr				# AndOr
	| '(' expr ')'								# Parens
	| NUM										# Num
	| FLOAT										# Float
	| ID										# IdExpr
	| BOOLE										# Boole
	| STRING									# String
	| RUNE										# Rune
	| NIL										# Nil;

lid: ID (',' ID)*;

lval: expr (',' expr)*;

pre: PVAR # Var | PCONST # Const;

type:
	PINT		# Pint
	| PFLOAT	# Pfloat
	| PBOOL		# Pboole
	| PSTRING	# Pstring
	| PRUNE		# Prune;

FUNC: 'func';
MAIN: 'main';
PVAR: 'var';
PCONST: 'const';

PINT: 'int32';
PFLOAT: 'float32';
PBOOL: 'boole';
PSTRING: 'string';
PRUNE: 'rune';

NUM: '-'? [0-9]+;
FLOAT: '-'? [0-9]+ '.' [0-9]+;
NIL: 'nil';
BOOLE: 'true' | 'false';
STRING: '"' ( ~["\\\r\n] | '\\' .)* '"';
RUNE: '\'' ~['\r\n] '\'';

ID: [_\p{L}] [_\p{L}\p{Nd}]*;
LINE_COMMENT: '//' ~[\r\n]* -> skip;
BLOCK_COMMENT: '/*' .*? '*/' -> skip;
WS: [ \t\r\n]+ -> skip;