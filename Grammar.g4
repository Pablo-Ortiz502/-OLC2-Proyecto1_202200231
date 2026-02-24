grammar Grammar;

s: FUNC MAIN '(' ')' '{' stmts* '}' EOF;

stmts: dec | asg;

dec:
	pre lid type '=' lval	# Declv
	| pre lid type			# Decl
	| lid '=' lval			# Sdec;

asg:
	ID '=' val		# Asig
	| ID '+=' val	# PlusAsig
	| ID '-=' val	# MinusAsig
	| ID '*=' val	# MultAsig
	| ID '/=' val	# DivAsig;

lid: ID (',' ID)*;

lval: val (',' val)*;

pre: PVAR # Var | PCONST # Const;

type:
	PINT		# Pint
	| PFLOAT	# Pfloat
	| PBOOL		# Pboole
	| PSTRING	# Pstring;
val:
	NUM			# Num
	| FLOAT		# Float
	| BOOLE		# Boole
	| STRING	# String
	| NIL		# Nil;

FUNC: 'func';
MAIN: 'main';
PVAR: 'var';
PCONST: 'const';

PINT: 'int32';
PFLOAT: 'float32';
PBOOL: 'boole';
PSTRING: 'string';

NUM: '-'? [0-9]+;
FLOAT: '-'? [0-9]+ '.' [0-9]+;
NIL: 'nil';
BOOLE: 'true' | 'false';
STRING: '"' ( ~["\\\r\n] | '\\' .)* '"';

ID: [_\p{L}] [_\p{L}\p{Nd}]*;
LINE_COMMENT: '//' ~[\r\n]* -> skip;
BLOCK_COMMENT: '/*' .*? '*/' -> skip;
WS: [ \t\r\n]+ -> skip;