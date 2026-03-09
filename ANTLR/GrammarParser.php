<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.0
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GrammarParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, FUNC = 31, MAIN = 32, 
               PVAR = 33, PCONST = 34, IF = 35, ELSE = 36, DEFAULT = 37, 
               CASE = 38, SWITCH = 39, FOR = 40, BREAK = 41, CONTINUE = 42, 
               RETURN = 43, PRINT = 44, SUBSTR = 45, LEN = 46, NOW = 47, 
               TYPEOF = 48, PINT = 49, PFLOAT = 50, PBOOL = 51, PSTRING = 52, 
               PRUNE = 53, NUM = 54, FLOAT = 55, NIL = 56, BOOLE = 57, STRING = 58, 
               RUNE = 59, ID = 60, LINE_COMMENT = 61, BLOCK_COMMENT = 62, 
               WS = 63, ERROR_CHAR = 64;

		public const RULE_s = 0, RULE_program = 1, RULE_functiondec = 2, RULE_paramlist = 3, 
               RULE_param = 4, RULE_typelist = 5, RULE_stmts = 6, RULE_pri = 7, 
               RULE_reserved = 8, RULE_block = 9, RULE_inst = 10, RULE_returnStmt = 11, 
               RULE_ifStmt = 12, RULE_forStmt = 13, RULE_switchStmt = 14, 
               RULE_caseClause = 15, RULE_defaultClause = 16, RULE_dec = 17, 
               RULE_arraydec = 18, RULE_larrayexp = 19, RULE_larray = 20, 
               RULE_arrayValue = 21, RULE_arrayElements = 22, RULE_arrayElement = 23, 
               RULE_asg = 24, RULE_incdec = 25, RULE_expr = 26, RULE_vals = 27, 
               RULE_funcCall = 28, RULE_lid = 29, RULE_par = 30, RULE_lvalpar = 31, 
               RULE_lval = 32, RULE_pre = 33, RULE_type = 34;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			's', 'program', 'functiondec', 'paramlist', 'param', 'typelist', 'stmts', 
			'pri', 'reserved', 'block', 'inst', 'returnStmt', 'ifStmt', 'forStmt', 
			'switchStmt', 'caseClause', 'defaultClause', 'dec', 'arraydec', 'larrayexp', 
			'larray', 'arrayValue', 'arrayElements', 'arrayElement', 'asg', 'incdec', 
			'expr', 'vals', 'funcCall', 'lid', 'par', 'lvalpar', 'lval', 'pre', 'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'('", "')'", "','", "'*'", "'{'", "'}'", "';'", "':'", "'='", 
		    "':='", "'['", "']'", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", 
		    "'/'", "'%'", "'+'", "'-'", "'=='", "'!='", "'>='", "'<='", "'>'", 
		    "'<'", "'&&'", "'||'", "'func'", "'main'", "'var'", "'const'", "'if'", 
		    "'else'", "'default'", "'case'", "'switch'", "'for'", "'break'", "'continue'", 
		    "'return'", "'fmt.Println'", "'substr'", "'len'", "'now'", "'typeOf'", 
		    "'int32'", "'float32'", "'boole'", "'string'", "'rune'", null, null, 
		    "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, "FUNC", "MAIN", 
		    "PVAR", "PCONST", "IF", "ELSE", "DEFAULT", "CASE", "SWITCH", "FOR", 
		    "BREAK", "CONTINUE", "RETURN", "PRINT", "SUBSTR", "LEN", "NOW", "TYPEOF", 
		    "PINT", "PFLOAT", "PBOOL", "PSTRING", "PRUNE", "NUM", "FLOAT", "NIL", 
		    "BOOLE", "STRING", "RUNE", "ID", "LINE_COMMENT", "BLOCK_COMMENT", 
		    "WS", "ERROR_CHAR"
		];

		private const SERIALIZED_ATN =
			[4, 1, 64, 448, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 1, 0, 5, 0, 72, 8, 0, 10, 0, 12, 0, 75, 9, 0, 1, 
		    0, 1, 0, 5, 0, 79, 8, 0, 10, 0, 12, 0, 82, 9, 0, 1, 0, 1, 0, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 96, 8, 
		    2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 106, 8, 2, 
		    1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 116, 8, 2, 1, 
		    2, 1, 2, 3, 2, 120, 8, 2, 1, 3, 1, 3, 1, 3, 5, 3, 125, 8, 3, 10, 3, 
		    12, 3, 128, 9, 3, 1, 4, 3, 4, 131, 8, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 
		    4, 137, 8, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 143, 8, 4, 1, 5, 1, 5, 
		    1, 5, 1, 5, 4, 5, 149, 8, 5, 11, 5, 12, 5, 150, 1, 5, 1, 5, 1, 6, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 
		    166, 8, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 195, 8, 8, 1, 9, 1, 9, 
		    5, 9, 199, 8, 9, 10, 9, 12, 9, 202, 9, 9, 1, 9, 1, 9, 1, 10, 1, 10, 
		    1, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 216, 
		    8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 3, 13, 232, 8, 13, 1, 14, 1, 
		    14, 1, 14, 1, 14, 4, 14, 238, 8, 14, 11, 14, 12, 14, 239, 1, 14, 3, 
		    14, 243, 8, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 3, 17, 270, 
		    8, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 3, 18, 286, 8, 18, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 5, 19, 295, 8, 19, 10, 19, 
		    12, 19, 298, 9, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 5, 20, 
		    306, 8, 20, 10, 20, 12, 20, 309, 9, 20, 1, 21, 1, 21, 3, 21, 313, 
		    8, 21, 1, 21, 1, 21, 1, 22, 1, 22, 1, 22, 5, 22, 320, 8, 22, 10, 22, 
		    12, 22, 323, 9, 22, 1, 23, 1, 23, 3, 23, 327, 8, 23, 1, 24, 1, 24, 
		    1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 
		    24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 1, 24, 
		    3, 24, 350, 8, 24, 1, 25, 1, 25, 1, 25, 1, 26, 1, 26, 1, 26, 1, 26, 
		    1, 26, 1, 26, 1, 26, 3, 26, 362, 8, 26, 1, 26, 1, 26, 1, 26, 1, 26, 
		    1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 
		    26, 1, 26, 5, 26, 379, 8, 26, 10, 26, 12, 26, 382, 9, 26, 1, 27, 1, 
		    27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 3, 27, 
		    394, 8, 27, 1, 28, 1, 28, 1, 28, 3, 28, 399, 8, 28, 1, 28, 1, 28, 
		    1, 29, 1, 29, 1, 29, 5, 29, 406, 8, 29, 10, 29, 12, 29, 409, 9, 29, 
		    1, 30, 3, 30, 412, 8, 30, 1, 30, 1, 30, 3, 30, 416, 8, 30, 1, 31, 
		    1, 31, 1, 31, 5, 31, 421, 8, 31, 10, 31, 12, 31, 424, 9, 31, 1, 32, 
		    1, 32, 1, 32, 5, 32, 429, 8, 32, 10, 32, 12, 32, 432, 9, 32, 1, 33, 
		    1, 33, 3, 33, 436, 8, 33, 1, 34, 1, 34, 1, 34, 1, 34, 1, 34, 1, 34, 
		    1, 34, 1, 34, 3, 34, 446, 8, 34, 1, 34, 0, 1, 52, 35, 0, 2, 4, 6, 
		    8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 
		    42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 0, 7, 1, 0, 
		    41, 42, 1, 0, 17, 18, 2, 0, 4, 4, 19, 20, 1, 0, 21, 22, 1, 0, 23, 
		    24, 1, 0, 25, 28, 1, 0, 29, 30, 484, 0, 73, 1, 0, 0, 0, 2, 85, 1, 
		    0, 0, 0, 4, 119, 1, 0, 0, 0, 6, 121, 1, 0, 0, 0, 8, 142, 1, 0, 0, 
		    0, 10, 144, 1, 0, 0, 0, 12, 165, 1, 0, 0, 0, 14, 167, 1, 0, 0, 0, 
		    16, 194, 1, 0, 0, 0, 18, 196, 1, 0, 0, 0, 20, 205, 1, 0, 0, 0, 22, 
		    207, 1, 0, 0, 0, 24, 210, 1, 0, 0, 0, 26, 231, 1, 0, 0, 0, 28, 233, 
		    1, 0, 0, 0, 30, 246, 1, 0, 0, 0, 32, 251, 1, 0, 0, 0, 34, 269, 1, 
		    0, 0, 0, 36, 285, 1, 0, 0, 0, 38, 287, 1, 0, 0, 0, 40, 299, 1, 0, 
		    0, 0, 42, 310, 1, 0, 0, 0, 44, 316, 1, 0, 0, 0, 46, 326, 1, 0, 0, 
		    0, 48, 349, 1, 0, 0, 0, 50, 351, 1, 0, 0, 0, 52, 361, 1, 0, 0, 0, 
		    54, 393, 1, 0, 0, 0, 56, 395, 1, 0, 0, 0, 58, 402, 1, 0, 0, 0, 60, 
		    415, 1, 0, 0, 0, 62, 417, 1, 0, 0, 0, 64, 425, 1, 0, 0, 0, 66, 435, 
		    1, 0, 0, 0, 68, 445, 1, 0, 0, 0, 70, 72, 3, 4, 2, 0, 71, 70, 1, 0, 
		    0, 0, 72, 75, 1, 0, 0, 0, 73, 71, 1, 0, 0, 0, 73, 74, 1, 0, 0, 0, 
		    74, 76, 1, 0, 0, 0, 75, 73, 1, 0, 0, 0, 76, 80, 3, 2, 1, 0, 77, 79, 
		    3, 4, 2, 0, 78, 77, 1, 0, 0, 0, 79, 82, 1, 0, 0, 0, 80, 78, 1, 0, 
		    0, 0, 80, 81, 1, 0, 0, 0, 81, 83, 1, 0, 0, 0, 82, 80, 1, 0, 0, 0, 
		    83, 84, 5, 0, 0, 1, 84, 1, 1, 0, 0, 0, 85, 86, 5, 31, 0, 0, 86, 87, 
		    5, 32, 0, 0, 87, 88, 5, 1, 0, 0, 88, 89, 5, 2, 0, 0, 89, 90, 3, 18, 
		    9, 0, 90, 3, 1, 0, 0, 0, 91, 92, 5, 31, 0, 0, 92, 93, 5, 60, 0, 0, 
		    93, 95, 5, 1, 0, 0, 94, 96, 3, 6, 3, 0, 95, 94, 1, 0, 0, 0, 95, 96, 
		    1, 0, 0, 0, 96, 97, 1, 0, 0, 0, 97, 98, 5, 2, 0, 0, 98, 99, 3, 10, 
		    5, 0, 99, 100, 3, 18, 9, 0, 100, 120, 1, 0, 0, 0, 101, 102, 5, 31, 
		    0, 0, 102, 103, 5, 60, 0, 0, 103, 105, 5, 1, 0, 0, 104, 106, 3, 6, 
		    3, 0, 105, 104, 1, 0, 0, 0, 105, 106, 1, 0, 0, 0, 106, 107, 1, 0, 
		    0, 0, 107, 108, 5, 2, 0, 0, 108, 109, 3, 68, 34, 0, 109, 110, 3, 18, 
		    9, 0, 110, 120, 1, 0, 0, 0, 111, 112, 5, 31, 0, 0, 112, 113, 5, 60, 
		    0, 0, 113, 115, 5, 1, 0, 0, 114, 116, 3, 6, 3, 0, 115, 114, 1, 0, 
		    0, 0, 115, 116, 1, 0, 0, 0, 116, 117, 1, 0, 0, 0, 117, 118, 5, 2, 
		    0, 0, 118, 120, 3, 18, 9, 0, 119, 91, 1, 0, 0, 0, 119, 101, 1, 0, 
		    0, 0, 119, 111, 1, 0, 0, 0, 120, 5, 1, 0, 0, 0, 121, 126, 3, 8, 4, 
		    0, 122, 123, 5, 3, 0, 0, 123, 125, 3, 8, 4, 0, 124, 122, 1, 0, 0, 
		    0, 125, 128, 1, 0, 0, 0, 126, 124, 1, 0, 0, 0, 126, 127, 1, 0, 0, 
		    0, 127, 7, 1, 0, 0, 0, 128, 126, 1, 0, 0, 0, 129, 131, 5, 4, 0, 0, 
		    130, 129, 1, 0, 0, 0, 130, 131, 1, 0, 0, 0, 131, 132, 1, 0, 0, 0, 
		    132, 133, 3, 58, 29, 0, 133, 134, 3, 68, 34, 0, 134, 143, 1, 0, 0, 
		    0, 135, 137, 5, 4, 0, 0, 136, 135, 1, 0, 0, 0, 136, 137, 1, 0, 0, 
		    0, 137, 138, 1, 0, 0, 0, 138, 139, 5, 60, 0, 0, 139, 140, 3, 40, 20, 
		    0, 140, 141, 3, 68, 34, 0, 141, 143, 1, 0, 0, 0, 142, 130, 1, 0, 0, 
		    0, 142, 136, 1, 0, 0, 0, 143, 9, 1, 0, 0, 0, 144, 145, 5, 1, 0, 0, 
		    145, 148, 3, 68, 34, 0, 146, 147, 5, 3, 0, 0, 147, 149, 3, 68, 34, 
		    0, 148, 146, 1, 0, 0, 0, 149, 150, 1, 0, 0, 0, 150, 148, 1, 0, 0, 
		    0, 150, 151, 1, 0, 0, 0, 151, 152, 1, 0, 0, 0, 152, 153, 5, 2, 0, 
		    0, 153, 11, 1, 0, 0, 0, 154, 166, 3, 34, 17, 0, 155, 166, 3, 48, 24, 
		    0, 156, 166, 3, 24, 12, 0, 157, 166, 3, 26, 13, 0, 158, 166, 3, 20, 
		    10, 0, 159, 166, 3, 16, 8, 0, 160, 166, 3, 14, 7, 0, 161, 166, 3, 
		    28, 14, 0, 162, 166, 3, 36, 18, 0, 163, 166, 3, 22, 11, 0, 164, 166, 
		    3, 56, 28, 0, 165, 154, 1, 0, 0, 0, 165, 155, 1, 0, 0, 0, 165, 156, 
		    1, 0, 0, 0, 165, 157, 1, 0, 0, 0, 165, 158, 1, 0, 0, 0, 165, 159, 
		    1, 0, 0, 0, 165, 160, 1, 0, 0, 0, 165, 161, 1, 0, 0, 0, 165, 162, 
		    1, 0, 0, 0, 165, 163, 1, 0, 0, 0, 165, 164, 1, 0, 0, 0, 166, 13, 1, 
		    0, 0, 0, 167, 168, 5, 44, 0, 0, 168, 169, 5, 1, 0, 0, 169, 170, 3, 
		    64, 32, 0, 170, 171, 5, 2, 0, 0, 171, 15, 1, 0, 0, 0, 172, 173, 5, 
		    48, 0, 0, 173, 174, 5, 1, 0, 0, 174, 175, 3, 52, 26, 0, 175, 176, 
		    5, 2, 0, 0, 176, 195, 1, 0, 0, 0, 177, 178, 5, 47, 0, 0, 178, 179, 
		    5, 1, 0, 0, 179, 195, 5, 2, 0, 0, 180, 181, 5, 46, 0, 0, 181, 182, 
		    5, 1, 0, 0, 182, 183, 3, 52, 26, 0, 183, 184, 5, 2, 0, 0, 184, 195, 
		    1, 0, 0, 0, 185, 186, 5, 45, 0, 0, 186, 187, 5, 1, 0, 0, 187, 188, 
		    3, 52, 26, 0, 188, 189, 5, 3, 0, 0, 189, 190, 3, 52, 26, 0, 190, 191, 
		    5, 3, 0, 0, 191, 192, 3, 52, 26, 0, 192, 193, 5, 2, 0, 0, 193, 195, 
		    1, 0, 0, 0, 194, 172, 1, 0, 0, 0, 194, 177, 1, 0, 0, 0, 194, 180, 
		    1, 0, 0, 0, 194, 185, 1, 0, 0, 0, 195, 17, 1, 0, 0, 0, 196, 200, 5, 
		    5, 0, 0, 197, 199, 3, 12, 6, 0, 198, 197, 1, 0, 0, 0, 199, 202, 1, 
		    0, 0, 0, 200, 198, 1, 0, 0, 0, 200, 201, 1, 0, 0, 0, 201, 203, 1, 
		    0, 0, 0, 202, 200, 1, 0, 0, 0, 203, 204, 5, 6, 0, 0, 204, 19, 1, 0, 
		    0, 0, 205, 206, 7, 0, 0, 0, 206, 21, 1, 0, 0, 0, 207, 208, 5, 43, 
		    0, 0, 208, 209, 3, 52, 26, 0, 209, 23, 1, 0, 0, 0, 210, 211, 5, 35, 
		    0, 0, 211, 212, 3, 52, 26, 0, 212, 215, 3, 18, 9, 0, 213, 214, 5, 
		    36, 0, 0, 214, 216, 3, 18, 9, 0, 215, 213, 1, 0, 0, 0, 215, 216, 1, 
		    0, 0, 0, 216, 25, 1, 0, 0, 0, 217, 218, 5, 40, 0, 0, 218, 219, 3, 
		    34, 17, 0, 219, 220, 5, 7, 0, 0, 220, 221, 3, 52, 26, 0, 221, 222, 
		    5, 7, 0, 0, 222, 223, 3, 50, 25, 0, 223, 224, 3, 18, 9, 0, 224, 232, 
		    1, 0, 0, 0, 225, 226, 5, 40, 0, 0, 226, 227, 3, 52, 26, 0, 227, 228, 
		    3, 18, 9, 0, 228, 232, 1, 0, 0, 0, 229, 230, 5, 40, 0, 0, 230, 232, 
		    3, 18, 9, 0, 231, 217, 1, 0, 0, 0, 231, 225, 1, 0, 0, 0, 231, 229, 
		    1, 0, 0, 0, 232, 27, 1, 0, 0, 0, 233, 234, 5, 39, 0, 0, 234, 235, 
		    3, 52, 26, 0, 235, 237, 5, 5, 0, 0, 236, 238, 3, 30, 15, 0, 237, 236, 
		    1, 0, 0, 0, 238, 239, 1, 0, 0, 0, 239, 237, 1, 0, 0, 0, 239, 240, 
		    1, 0, 0, 0, 240, 242, 1, 0, 0, 0, 241, 243, 3, 32, 16, 0, 242, 241, 
		    1, 0, 0, 0, 242, 243, 1, 0, 0, 0, 243, 244, 1, 0, 0, 0, 244, 245, 
		    5, 6, 0, 0, 245, 29, 1, 0, 0, 0, 246, 247, 5, 38, 0, 0, 247, 248, 
		    3, 64, 32, 0, 248, 249, 5, 8, 0, 0, 249, 250, 3, 12, 6, 0, 250, 31, 
		    1, 0, 0, 0, 251, 252, 5, 37, 0, 0, 252, 253, 5, 8, 0, 0, 253, 254, 
		    3, 12, 6, 0, 254, 33, 1, 0, 0, 0, 255, 256, 3, 66, 33, 0, 256, 257, 
		    3, 58, 29, 0, 257, 258, 3, 68, 34, 0, 258, 259, 5, 9, 0, 0, 259, 260, 
		    3, 64, 32, 0, 260, 270, 1, 0, 0, 0, 261, 262, 3, 66, 33, 0, 262, 263, 
		    3, 58, 29, 0, 263, 264, 3, 68, 34, 0, 264, 270, 1, 0, 0, 0, 265, 266, 
		    3, 58, 29, 0, 266, 267, 5, 10, 0, 0, 267, 268, 3, 64, 32, 0, 268, 
		    270, 1, 0, 0, 0, 269, 255, 1, 0, 0, 0, 269, 261, 1, 0, 0, 0, 269, 
		    265, 1, 0, 0, 0, 270, 35, 1, 0, 0, 0, 271, 272, 5, 33, 0, 0, 272, 
		    273, 5, 60, 0, 0, 273, 274, 3, 40, 20, 0, 274, 275, 3, 68, 34, 0, 
		    275, 276, 5, 9, 0, 0, 276, 277, 3, 40, 20, 0, 277, 278, 3, 68, 34, 
		    0, 278, 279, 3, 42, 21, 0, 279, 286, 1, 0, 0, 0, 280, 281, 5, 33, 
		    0, 0, 281, 282, 5, 60, 0, 0, 282, 283, 3, 40, 20, 0, 283, 284, 3, 
		    68, 34, 0, 284, 286, 1, 0, 0, 0, 285, 271, 1, 0, 0, 0, 285, 280, 1, 
		    0, 0, 0, 286, 37, 1, 0, 0, 0, 287, 288, 5, 11, 0, 0, 288, 289, 3, 
		    52, 26, 0, 289, 296, 5, 12, 0, 0, 290, 291, 5, 11, 0, 0, 291, 292, 
		    3, 52, 26, 0, 292, 293, 5, 12, 0, 0, 293, 295, 1, 0, 0, 0, 294, 290, 
		    1, 0, 0, 0, 295, 298, 1, 0, 0, 0, 296, 294, 1, 0, 0, 0, 296, 297, 
		    1, 0, 0, 0, 297, 39, 1, 0, 0, 0, 298, 296, 1, 0, 0, 0, 299, 300, 5, 
		    11, 0, 0, 300, 301, 5, 54, 0, 0, 301, 307, 5, 12, 0, 0, 302, 303, 
		    5, 11, 0, 0, 303, 304, 5, 54, 0, 0, 304, 306, 5, 12, 0, 0, 305, 302, 
		    1, 0, 0, 0, 306, 309, 1, 0, 0, 0, 307, 305, 1, 0, 0, 0, 307, 308, 
		    1, 0, 0, 0, 308, 41, 1, 0, 0, 0, 309, 307, 1, 0, 0, 0, 310, 312, 5, 
		    5, 0, 0, 311, 313, 3, 44, 22, 0, 312, 311, 1, 0, 0, 0, 312, 313, 1, 
		    0, 0, 0, 313, 314, 1, 0, 0, 0, 314, 315, 5, 6, 0, 0, 315, 43, 1, 0, 
		    0, 0, 316, 321, 3, 46, 23, 0, 317, 318, 5, 3, 0, 0, 318, 320, 3, 46, 
		    23, 0, 319, 317, 1, 0, 0, 0, 320, 323, 1, 0, 0, 0, 321, 319, 1, 0, 
		    0, 0, 321, 322, 1, 0, 0, 0, 322, 45, 1, 0, 0, 0, 323, 321, 1, 0, 0, 
		    0, 324, 327, 3, 52, 26, 0, 325, 327, 3, 42, 21, 0, 326, 324, 1, 0, 
		    0, 0, 326, 325, 1, 0, 0, 0, 327, 47, 1, 0, 0, 0, 328, 329, 5, 60, 
		    0, 0, 329, 330, 3, 38, 19, 0, 330, 331, 5, 9, 0, 0, 331, 332, 3, 52, 
		    26, 0, 332, 350, 1, 0, 0, 0, 333, 334, 5, 60, 0, 0, 334, 335, 5, 9, 
		    0, 0, 335, 350, 3, 52, 26, 0, 336, 337, 5, 60, 0, 0, 337, 338, 5, 
		    13, 0, 0, 338, 350, 3, 52, 26, 0, 339, 340, 5, 60, 0, 0, 340, 341, 
		    5, 14, 0, 0, 341, 350, 3, 52, 26, 0, 342, 343, 5, 60, 0, 0, 343, 344, 
		    5, 15, 0, 0, 344, 350, 3, 52, 26, 0, 345, 346, 5, 60, 0, 0, 346, 347, 
		    5, 16, 0, 0, 347, 350, 3, 52, 26, 0, 348, 350, 3, 50, 25, 0, 349, 
		    328, 1, 0, 0, 0, 349, 333, 1, 0, 0, 0, 349, 336, 1, 0, 0, 0, 349, 
		    339, 1, 0, 0, 0, 349, 342, 1, 0, 0, 0, 349, 345, 1, 0, 0, 0, 349, 
		    348, 1, 0, 0, 0, 350, 49, 1, 0, 0, 0, 351, 352, 5, 60, 0, 0, 352, 
		    353, 7, 1, 0, 0, 353, 51, 1, 0, 0, 0, 354, 355, 6, 26, -1, 0, 355, 
		    356, 5, 1, 0, 0, 356, 357, 3, 52, 26, 0, 357, 358, 5, 2, 0, 0, 358, 
		    362, 1, 0, 0, 0, 359, 362, 3, 54, 27, 0, 360, 362, 3, 16, 8, 0, 361, 
		    354, 1, 0, 0, 0, 361, 359, 1, 0, 0, 0, 361, 360, 1, 0, 0, 0, 362, 
		    380, 1, 0, 0, 0, 363, 364, 10, 8, 0, 0, 364, 365, 7, 2, 0, 0, 365, 
		    379, 3, 52, 26, 9, 366, 367, 10, 7, 0, 0, 367, 368, 7, 3, 0, 0, 368, 
		    379, 3, 52, 26, 8, 369, 370, 10, 6, 0, 0, 370, 371, 7, 4, 0, 0, 371, 
		    379, 3, 52, 26, 7, 372, 373, 10, 5, 0, 0, 373, 374, 7, 5, 0, 0, 374, 
		    379, 3, 52, 26, 6, 375, 376, 10, 4, 0, 0, 376, 377, 7, 6, 0, 0, 377, 
		    379, 3, 52, 26, 5, 378, 363, 1, 0, 0, 0, 378, 366, 1, 0, 0, 0, 378, 
		    369, 1, 0, 0, 0, 378, 372, 1, 0, 0, 0, 378, 375, 1, 0, 0, 0, 379, 
		    382, 1, 0, 0, 0, 380, 378, 1, 0, 0, 0, 380, 381, 1, 0, 0, 0, 381, 
		    53, 1, 0, 0, 0, 382, 380, 1, 0, 0, 0, 383, 394, 5, 54, 0, 0, 384, 
		    394, 5, 55, 0, 0, 385, 394, 3, 56, 28, 0, 386, 387, 5, 60, 0, 0, 387, 
		    394, 3, 38, 19, 0, 388, 394, 5, 60, 0, 0, 389, 394, 5, 57, 0, 0, 390, 
		    394, 5, 58, 0, 0, 391, 394, 5, 59, 0, 0, 392, 394, 5, 56, 0, 0, 393, 
		    383, 1, 0, 0, 0, 393, 384, 1, 0, 0, 0, 393, 385, 1, 0, 0, 0, 393, 
		    386, 1, 0, 0, 0, 393, 388, 1, 0, 0, 0, 393, 389, 1, 0, 0, 0, 393, 
		    390, 1, 0, 0, 0, 393, 391, 1, 0, 0, 0, 393, 392, 1, 0, 0, 0, 394, 
		    55, 1, 0, 0, 0, 395, 396, 5, 60, 0, 0, 396, 398, 5, 1, 0, 0, 397, 
		    399, 3, 62, 31, 0, 398, 397, 1, 0, 0, 0, 398, 399, 1, 0, 0, 0, 399, 
		    400, 1, 0, 0, 0, 400, 401, 5, 2, 0, 0, 401, 57, 1, 0, 0, 0, 402, 407, 
		    5, 60, 0, 0, 403, 404, 5, 3, 0, 0, 404, 406, 5, 60, 0, 0, 405, 403, 
		    1, 0, 0, 0, 406, 409, 1, 0, 0, 0, 407, 405, 1, 0, 0, 0, 407, 408, 
		    1, 0, 0, 0, 408, 59, 1, 0, 0, 0, 409, 407, 1, 0, 0, 0, 410, 412, 5, 
		    4, 0, 0, 411, 410, 1, 0, 0, 0, 411, 412, 1, 0, 0, 0, 412, 413, 1, 
		    0, 0, 0, 413, 416, 5, 60, 0, 0, 414, 416, 3, 52, 26, 0, 415, 411, 
		    1, 0, 0, 0, 415, 414, 1, 0, 0, 0, 416, 61, 1, 0, 0, 0, 417, 422, 3, 
		    60, 30, 0, 418, 419, 5, 3, 0, 0, 419, 421, 3, 60, 30, 0, 420, 418, 
		    1, 0, 0, 0, 421, 424, 1, 0, 0, 0, 422, 420, 1, 0, 0, 0, 422, 423, 
		    1, 0, 0, 0, 423, 63, 1, 0, 0, 0, 424, 422, 1, 0, 0, 0, 425, 430, 3, 
		    52, 26, 0, 426, 427, 5, 3, 0, 0, 427, 429, 3, 52, 26, 0, 428, 426, 
		    1, 0, 0, 0, 429, 432, 1, 0, 0, 0, 430, 428, 1, 0, 0, 0, 430, 431, 
		    1, 0, 0, 0, 431, 65, 1, 0, 0, 0, 432, 430, 1, 0, 0, 0, 433, 436, 5, 
		    33, 0, 0, 434, 436, 5, 34, 0, 0, 435, 433, 1, 0, 0, 0, 435, 434, 1, 
		    0, 0, 0, 436, 67, 1, 0, 0, 0, 437, 446, 5, 49, 0, 0, 438, 446, 5, 
		    50, 0, 0, 439, 446, 5, 51, 0, 0, 440, 446, 5, 52, 0, 0, 441, 446, 
		    5, 53, 0, 0, 442, 443, 3, 40, 20, 0, 443, 444, 3, 68, 34, 0, 444, 
		    446, 1, 0, 0, 0, 445, 437, 1, 0, 0, 0, 445, 438, 1, 0, 0, 0, 445, 
		    439, 1, 0, 0, 0, 445, 440, 1, 0, 0, 0, 445, 441, 1, 0, 0, 0, 445, 
		    442, 1, 0, 0, 0, 446, 69, 1, 0, 0, 0, 38, 73, 80, 95, 105, 115, 119, 
		    126, 130, 136, 142, 150, 165, 194, 200, 215, 231, 239, 242, 269, 285, 
		    296, 307, 312, 321, 326, 349, 361, 378, 380, 393, 398, 407, 411, 415, 
		    422, 430, 435, 445];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.0', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Grammar.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function s(): Context\SContext
		{
		    $localContext = new Context\SContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_s);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(73);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(70);
		        		$this->functiondec(); 
		        	}

		        	$this->setState(75);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);
		        }
		        $this->setState(76);
		        $this->program();
		        $this->setState(80);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::FUNC) {
		        	$this->setState(77);
		        	$this->functiondec();
		        	$this->setState(82);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(83);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(85);
		        $this->match(self::FUNC);
		        $this->setState(86);
		        $this->match(self::MAIN);
		        $this->setState(87);
		        $this->match(self::T__0);
		        $this->setState(88);
		        $this->match(self::T__1);
		        $this->setState(89);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functiondec(): Context\FunctiondecContext
		{
		    $localContext = new Context\FunctiondecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_functiondec);

		    try {
		        $this->setState(119);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\MultFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(91);
		        	    $this->match(self::FUNC);
		        	    $this->setState(92);
		        	    $this->match(self::ID);
		        	    $this->setState(93);
		        	    $this->match(self::T__0);
		        	    $this->setState(95);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(94);
		        	    	$this->paramlist();
		        	    }
		        	    $this->setState(97);
		        	    $this->match(self::T__1);
		        	    $this->setState(98);
		        	    $this->typelist();
		        	    $this->setState(99);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\SimpleFuncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(101);
		        	    $this->match(self::FUNC);
		        	    $this->setState(102);
		        	    $this->match(self::ID);
		        	    $this->setState(103);
		        	    $this->match(self::T__0);
		        	    $this->setState(105);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(104);
		        	    	$this->paramlist();
		        	    }
		        	    $this->setState(107);
		        	    $this->match(self::T__1);
		        	    $this->setState(108);
		        	    $this->type();
		        	    $this->setState(109);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\MethodContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(111);
		        	    $this->match(self::FUNC);
		        	    $this->setState(112);
		        	    $this->match(self::ID);
		        	    $this->setState(113);
		        	    $this->match(self::T__0);
		        	    $this->setState(115);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3 || $_la === self::ID) {
		        	    	$this->setState(114);
		        	    	$this->paramlist();
		        	    }
		        	    $this->setState(117);
		        	    $this->match(self::T__1);
		        	    $this->setState(118);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function paramlist(): Context\ParamlistContext
		{
		    $localContext = new Context\ParamlistContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_paramlist);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(121);
		        $this->param();
		        $this->setState(126);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(122);
		        	$this->match(self::T__2);
		        	$this->setState(123);
		        	$this->param();
		        	$this->setState(128);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_param);

		    try {
		        $this->setState(142);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\FuncParamDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(130);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3) {
		        	    	$this->setState(129);
		        	    	$localContext->ref = $this->match(self::T__3);
		        	    }
		        	    $this->setState(132);
		        	    $this->lid();
		        	    $this->setState(133);
		        	    $this->type();
		        	break;

		        	case 2:
		        	    $localContext = new Context\FuncArrayDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(136);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3) {
		        	    	$this->setState(135);
		        	    	$localContext->ref = $this->match(self::T__3);
		        	    }
		        	    $this->setState(138);
		        	    $this->match(self::ID);
		        	    $this->setState(139);
		        	    $this->larray();
		        	    $this->setState(140);
		        	    $this->type();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typelist(): Context\TypelistContext
		{
		    $localContext = new Context\TypelistContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_typelist);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(144);
		        $this->match(self::T__0);
		        $this->setState(145);
		        $this->type();
		        $this->setState(148); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(146);
		        	$this->match(self::T__2);
		        	$this->setState(147);
		        	$this->type();
		        	$this->setState(150); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__2);
		        $this->setState(152);
		        $this->match(self::T__1);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function stmts(): Context\StmtsContext
		{
		    $localContext = new Context\StmtsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_stmts);

		    try {
		        $this->setState(165);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(154);
		        	    $this->dec();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(155);
		        	    $this->asg();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(156);
		        	    $this->ifStmt();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(157);
		        	    $this->forStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(158);
		        	    $this->inst();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(159);
		        	    $this->reserved();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(160);
		        	    $this->pri();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(161);
		        	    $this->switchStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(162);
		        	    $this->arraydec();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(163);
		        	    $this->returnStmt();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(164);
		        	    $this->funcCall();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pri(): Context\PriContext
		{
		    $localContext = new Context\PriContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_pri);

		    try {
		        $localContext = new Context\PrintlnContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(167);
		        $this->match(self::PRINT);
		        $this->setState(168);
		        $this->match(self::T__0);
		        $this->setState(169);
		        $this->lval();
		        $this->setState(170);
		        $this->match(self::T__1);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function reserved(): Context\ReservedContext
		{
		    $localContext = new Context\ReservedContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_reserved);

		    try {
		        $this->setState(194);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPEOF:
		            	$localContext = new Context\TypeOContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(172);
		            	$this->match(self::TYPEOF);
		            	$this->setState(173);
		            	$this->match(self::T__0);
		            	$this->setState(174);
		            	$this->recursiveExpr(0);
		            	$this->setState(175);
		            	$this->match(self::T__1);
		            	break;

		            case self::NOW:
		            	$localContext = new Context\NowFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(177);
		            	$this->match(self::NOW);
		            	$this->setState(178);
		            	$this->match(self::T__0);
		            	$this->setState(179);
		            	$this->match(self::T__1);
		            	break;

		            case self::LEN:
		            	$localContext = new Context\LenFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(180);
		            	$this->match(self::LEN);
		            	$this->setState(181);
		            	$this->match(self::T__0);
		            	$this->setState(182);
		            	$this->recursiveExpr(0);
		            	$this->setState(183);
		            	$this->match(self::T__1);
		            	break;

		            case self::SUBSTR:
		            	$localContext = new Context\SubSContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(185);
		            	$this->match(self::SUBSTR);
		            	$this->setState(186);
		            	$this->match(self::T__0);
		            	$this->setState(187);
		            	$this->recursiveExpr(0);
		            	$this->setState(188);
		            	$this->match(self::T__2);
		            	$this->setState(189);
		            	$this->recursiveExpr(0);
		            	$this->setState(190);
		            	$this->match(self::T__2);
		            	$this->setState(191);
		            	$this->recursiveExpr(0);
		            	$this->setState(192);
		            	$this->match(self::T__1);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(196);
		        $this->match(self::T__4);
		        $this->setState(200);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1153483964933996544) !== 0)) {
		        	$this->setState(197);
		        	$this->stmts();
		        	$this->setState(202);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(203);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function inst(): Context\InstContext
		{
		    $localContext = new Context\InstContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_inst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(205);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::BREAK || $_la === self::CONTINUE)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt(): Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(207);
		        $this->match(self::RETURN);
		        $this->setState(208);
		        $this->recursiveExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(210);
		        $this->match(self::IF);
		        $this->setState(211);
		        $this->recursiveExpr(0);
		        $this->setState(212);
		        $this->block();
		        $this->setState(215);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(213);
		        	$this->match(self::ELSE);
		        	$this->setState(214);
		        	$this->block();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt(): Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_forStmt);

		    try {
		        $this->setState(231);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LongForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(217);
		        	    $this->match(self::FOR);
		        	    $this->setState(218);
		        	    $this->dec();
		        	    $this->setState(219);
		        	    $this->match(self::T__6);
		        	    $this->setState(220);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(221);
		        	    $this->match(self::T__6);
		        	    $this->setState(222);
		        	    $this->incdec();
		        	    $this->setState(223);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\MidForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(225);
		        	    $this->match(self::FOR);
		        	    $this->setState(226);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(227);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(229);
		        	    $this->match(self::FOR);
		        	    $this->setState(230);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(233);
		        $this->match(self::SWITCH);
		        $this->setState(234);
		        $this->recursiveExpr(0);
		        $this->setState(235);
		        $this->match(self::T__4);
		        $this->setState(237); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(236);
		        	$this->caseClause();
		        	$this->setState(239); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::CASE);
		        $this->setState(242);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(241);
		        	$this->defaultClause();
		        }
		        $this->setState(244);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function caseClause(): Context\CaseClauseContext
		{
		    $localContext = new Context\CaseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_caseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(246);
		        $this->match(self::CASE);
		        $this->setState(247);
		        $this->lval();
		        $this->setState(248);
		        $this->match(self::T__7);
		        $this->setState(249);
		        $this->stmts();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultClause(): Context\DefaultClauseContext
		{
		    $localContext = new Context\DefaultClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_defaultClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(251);
		        $this->match(self::DEFAULT);
		        $this->setState(252);
		        $this->match(self::T__7);
		        $this->setState(253);
		        $this->stmts();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dec(): Context\DecContext
		{
		    $localContext = new Context\DecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_dec);

		    try {
		        $this->setState(269);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\DeclvContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(255);
		        	    $this->pre();
		        	    $this->setState(256);
		        	    $this->lid();
		        	    $this->setState(257);
		        	    $this->type();
		        	    $this->setState(258);
		        	    $this->match(self::T__8);
		        	    $this->setState(259);
		        	    $this->lval();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(261);
		        	    $this->pre();
		        	    $this->setState(262);
		        	    $this->lid();
		        	    $this->setState(263);
		        	    $this->type();
		        	break;

		        	case 3:
		        	    $localContext = new Context\SdecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(265);
		        	    $this->lid();
		        	    $this->setState(266);
		        	    $this->match(self::T__9);
		        	    $this->setState(267);
		        	    $this->lval();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arraydec(): Context\ArraydecContext
		{
		    $localContext = new Context\ArraydecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_arraydec);

		    try {
		        $this->setState(285);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LongArrayDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(271);
		        	    $this->match(self::PVAR);
		        	    $this->setState(272);
		        	    $this->match(self::ID);
		        	    $this->setState(273);
		        	    $this->larray();
		        	    $this->setState(274);
		        	    $this->type();
		        	    $this->setState(275);
		        	    $this->match(self::T__8);
		        	    $this->setState(276);
		        	    $this->larray();
		        	    $this->setState(277);
		        	    $this->type();
		        	    $this->setState(278);
		        	    $this->arrayValue();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ShortArrayDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(280);
		        	    $this->match(self::PVAR);
		        	    $this->setState(281);
		        	    $this->match(self::ID);
		        	    $this->setState(282);
		        	    $this->larray();
		        	    $this->setState(283);
		        	    $this->type();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function larrayexp(): Context\LarrayexpContext
		{
		    $localContext = new Context\LarrayexpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_larrayexp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(287);
		        $this->match(self::T__10);
		        $this->setState(288);
		        $this->recursiveExpr(0);
		        $this->setState(289);
		        $this->match(self::T__11);
		        $this->setState(296);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(290);
		        		$this->match(self::T__10);
		        		$this->setState(291);
		        		$this->recursiveExpr(0);
		        		$this->setState(292);
		        		$this->match(self::T__11); 
		        	}

		        	$this->setState(298);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function larray(): Context\LarrayContext
		{
		    $localContext = new Context\LarrayContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_larray);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(299);
		        $this->match(self::T__10);
		        $this->setState(300);
		        $this->match(self::NUM);
		        $this->setState(301);
		        $this->match(self::T__11);
		        $this->setState(307);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(302);
		        		$this->match(self::T__10);
		        		$this->setState(303);
		        		$this->match(self::NUM);
		        		$this->setState(304);
		        		$this->match(self::T__11); 
		        	}

		        	$this->setState(309);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayValue(): Context\ArrayValueContext
		{
		    $localContext = new Context\ArrayValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_arrayValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(310);
		        $this->match(self::T__4);
		        $this->setState(312);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2288356376285544482) !== 0)) {
		        	$this->setState(311);
		        	$this->arrayElements();
		        }
		        $this->setState(314);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayElements(): Context\ArrayElementsContext
		{
		    $localContext = new Context\ArrayElementsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_arrayElements);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(316);
		        $this->arrayElement();
		        $this->setState(321);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(317);
		        	$this->match(self::T__2);
		        	$this->setState(318);
		        	$this->arrayElement();
		        	$this->setState(323);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayElement(): Context\ArrayElementContext
		{
		    $localContext = new Context\ArrayElementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_arrayElement);

		    try {
		        $this->setState(326);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__0:
		            case self::SUBSTR:
		            case self::LEN:
		            case self::NOW:
		            case self::TYPEOF:
		            case self::NUM:
		            case self::FLOAT:
		            case self::NIL:
		            case self::BOOLE:
		            case self::STRING:
		            case self::RUNE:
		            case self::ID:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(324);
		            	$this->recursiveExpr(0);
		            	break;

		            case self::T__4:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(325);
		            	$this->arrayValue();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function asg(): Context\AsgContext
		{
		    $localContext = new Context\AsgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_asg);

		    try {
		        $this->setState(349);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 25, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ArrayAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(328);
		        	    $this->match(self::ID);
		        	    $this->setState(329);
		        	    $this->larrayexp();
		        	    $this->setState(330);
		        	    $this->match(self::T__8);
		        	    $this->setState(331);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 2:
		        	    $localContext = new Context\AsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(333);
		        	    $this->match(self::ID);
		        	    $this->setState(334);
		        	    $this->match(self::T__8);
		        	    $this->setState(335);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 3:
		        	    $localContext = new Context\PlusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(336);
		        	    $this->match(self::ID);
		        	    $this->setState(337);
		        	    $this->match(self::T__12);
		        	    $this->setState(338);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 4:
		        	    $localContext = new Context\MinusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(339);
		        	    $this->match(self::ID);
		        	    $this->setState(340);
		        	    $this->match(self::T__13);
		        	    $this->setState(341);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 5:
		        	    $localContext = new Context\MultAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(342);
		        	    $this->match(self::ID);
		        	    $this->setState(343);
		        	    $this->match(self::T__14);
		        	    $this->setState(344);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 6:
		        	    $localContext = new Context\DivAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(345);
		        	    $this->match(self::ID);
		        	    $this->setState(346);
		        	    $this->match(self::T__15);
		        	    $this->setState(347);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 7:
		        	    $localContext = new Context\IndeContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(348);
		        	    $this->incdec();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function incdec(): Context\IncdecContext
		{
		    $localContext = new Context\IncdecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_incdec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(351);
		        $this->match(self::ID);
		        $this->setState(352);

		        $localContext->op = $this->input->LT(1);
		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__16 || $_la === self::T__17)) {
		        	    $localContext->op = $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 52;
			$this->enterRecursionRule($localContext, 52, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(361);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__0:
				    	$localContext = new Context\ParensContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(355);
				    	$this->match(self::T__0);
				    	$this->setState(356);
				    	$this->recursiveExpr(0);
				    	$this->setState(357);
				    	$this->match(self::T__1);
				    	break;

				    case self::NUM:
				    case self::FLOAT:
				    case self::NIL:
				    case self::BOOLE:
				    case self::STRING:
				    case self::RUNE:
				    case self::ID:
				    	$localContext = new Context\VaContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(359);
				    	$this->vals();
				    	break;

				    case self::SUBSTR:
				    case self::LEN:
				    case self::NOW:
				    case self::TYPEOF:
				    	$localContext = new Context\ReContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(360);
				    	$this->reserved();
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(380);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(378);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivModContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(363);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(364);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1572880) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(365);
							    $this->recursiveExpr(9);
							break;

							case 2:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(366);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(367);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__20 || $_la === self::T__21)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(368);
							    $this->recursiveExpr(8);
							break;

							case 3:
							    $localContext = new Context\EqNotEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(369);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(370);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__22 || $_la === self::T__23)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(371);
							    $this->recursiveExpr(7);
							break;

							case 4:
							    $localContext = new Context\MoreLessEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(372);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(373);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 503316480) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(374);
							    $this->recursiveExpr(6);
							break;

							case 5:
							    $localContext = new Context\AndOrContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(375);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(376);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__28 || $_la === self::T__29)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(377);
							    $this->recursiveExpr(5);
							break;
						} 
					}

					$this->setState(382);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function vals(): Context\ValsContext
		{
		    $localContext = new Context\ValsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_vals);

		    try {
		        $this->setState(393);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\NumContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(383);
		        	    $this->match(self::NUM);
		        	break;

		        	case 2:
		        	    $localContext = new Context\FloatContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(384);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 3:
		        	    $localContext = new Context\FcContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(385);
		        	    $this->funcCall();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ArrayValContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(386);
		        	    $this->match(self::ID);
		        	    $this->setState(387);
		        	    $this->larrayexp();
		        	break;

		        	case 5:
		        	    $localContext = new Context\IdExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(388);
		        	    $this->match(self::ID);
		        	break;

		        	case 6:
		        	    $localContext = new Context\BooleContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(389);
		        	    $this->match(self::BOOLE);
		        	break;

		        	case 7:
		        	    $localContext = new Context\StringContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(390);
		        	    $this->match(self::STRING);
		        	break;

		        	case 8:
		        	    $localContext = new Context\RuneContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(391);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 9:
		        	    $localContext = new Context\NilContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(392);
		        	    $this->match(self::NIL);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcCall(): Context\FuncCallContext
		{
		    $localContext = new Context\FuncCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_funcCall);

		    try {
		        $localContext = new Context\FunReturnContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(395);
		        $this->match(self::ID);
		        $this->setState(396);
		        $this->match(self::T__0);
		        $this->setState(398);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2288356376285544466) !== 0)) {
		        	$this->setState(397);
		        	$this->lvalpar();
		        }
		        $this->setState(400);
		        $this->match(self::T__1);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function lid(): Context\LidContext
		{
		    $localContext = new Context\LidContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_lid);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(402);
		        $this->match(self::ID);
		        $this->setState(407);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(403);
		        	$this->match(self::T__2);
		        	$this->setState(404);
		        	$this->match(self::ID);
		        	$this->setState(409);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function par(): Context\ParContext
		{
		    $localContext = new Context\ParContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_par);

		    try {
		        $this->setState(415);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 33, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(411);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__3) {
		        	    	$this->setState(410);
		        	    	$localContext->ref = $this->match(self::T__3);
		        	    }
		        	    $this->setState(413);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(414);
		        	    $this->recursiveExpr(0);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function lvalpar(): Context\LvalparContext
		{
		    $localContext = new Context\LvalparContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_lvalpar);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(417);
		        $this->par();
		        $this->setState(422);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(418);
		        	$this->match(self::T__2);
		        	$this->setState(419);
		        	$this->par();
		        	$this->setState(424);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function lval(): Context\LvalContext
		{
		    $localContext = new Context\LvalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_lval);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(425);
		        $this->recursiveExpr(0);
		        $this->setState(430);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(426);
		        	$this->match(self::T__2);
		        	$this->setState(427);
		        	$this->recursiveExpr(0);
		        	$this->setState(432);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pre(): Context\PreContext
		{
		    $localContext = new Context\PreContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_pre);

		    try {
		        $this->setState(435);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PVAR:
		            	$localContext = new Context\VarContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(433);
		            	$this->match(self::PVAR);
		            	break;

		            case self::PCONST:
		            	$localContext = new Context\ConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(434);
		            	$this->match(self::PCONST);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_type);

		    try {
		        $this->setState(445);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PINT:
		            	$localContext = new Context\PintContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(437);
		            	$this->match(self::PINT);
		            	break;

		            case self::PFLOAT:
		            	$localContext = new Context\PfloatContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(438);
		            	$this->match(self::PFLOAT);
		            	break;

		            case self::PBOOL:
		            	$localContext = new Context\PbooleContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(439);
		            	$this->match(self::PBOOL);
		            	break;

		            case self::PSTRING:
		            	$localContext = new Context\PstringContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(440);
		            	$this->match(self::PSTRING);
		            	break;

		            case self::PRUNE:
		            	$localContext = new Context\PruneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(441);
		            	$this->match(self::PRUNE);
		            	break;

		            case self::T__10:
		            	$localContext = new Context\FunArrayTypeContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(442);
		            	$this->larray();
		            	$this->setState(443);
		            	$this->type();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 26:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 8);

			    case 1:
			        return $this->precpred($this->ctx, 7);

			    case 2:
			        return $this->precpred($this->ctx, 6);

			    case 3:
			        return $this->precpred($this->ctx, 5);

			    case 4:
			        return $this->precpred($this->ctx, 4);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GrammarParser;
	use GrammarVisitor;
	use GrammarListener;

	class SContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_s;
	    }

	    public function program(): ?ProgramContext
	    {
	    	return $this->getTypedRuleContext(ProgramContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
	    }

	    /**
	     * @return array<FunctiondecContext>|FunctiondecContext|null
	     */
	    public function functiondec(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FunctiondecContext::class);
	    	}

	        return $this->getTypedRuleContext(FunctiondecContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterS($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitS($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitS($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_program;
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FUNC, 0);
	    }

	    public function MAIN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MAIN, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctiondecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_functiondec;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class SimpleFuncContext extends FunctiondecContext
	{
		public function __construct(FunctiondecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function paramlist(): ?ParamlistContext
	    {
	    	return $this->getTypedRuleContext(ParamlistContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSimpleFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSimpleFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSimpleFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MethodContext extends FunctiondecContext
	{
		public function __construct(FunctiondecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function paramlist(): ?ParamlistContext
	    {
	    	return $this->getTypedRuleContext(ParamlistContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMethod($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMethod($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMethod($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MultFuncContext extends FunctiondecContext
	{
		public function __construct(FunctiondecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function typelist(): ?TypelistContext
	    {
	    	return $this->getTypedRuleContext(TypelistContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function paramlist(): ?ParamlistContext
	    {
	    	return $this->getTypedRuleContext(ParamlistContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMultFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMultFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMultFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamlistContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_paramlist;
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterParamlist($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitParamlist($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitParamlist($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_param;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class FuncParamDecContext extends ParamContext
	{
		/**
		 * @var Token|null $ref
		 */
		public $ref;

		public function __construct(ParamContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function lid(): ?LidContext
	    {
	    	return $this->getTypedRuleContext(LidContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncParamDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncParamDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncParamDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FuncArrayDecContext extends ParamContext
	{
		/**
		 * @var Token|null $ref
		 */
		public $ref;

		public function __construct(ParamContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function larray(): ?LarrayContext
	    {
	    	return $this->getTypedRuleContext(LarrayContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFuncArrayDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFuncArrayDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFuncArrayDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypelistContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_typelist;
	    }

	    /**
	     * @return array<TypeContext>|TypeContext|null
	     */
	    public function type(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTypelist($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTypelist($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTypelist($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StmtsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_stmts;
	    }

	    public function dec(): ?DecContext
	    {
	    	return $this->getTypedRuleContext(DecContext::class, 0);
	    }

	    public function asg(): ?AsgContext
	    {
	    	return $this->getTypedRuleContext(AsgContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function forStmt(): ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function inst(): ?InstContext
	    {
	    	return $this->getTypedRuleContext(InstContext::class, 0);
	    }

	    public function reserved(): ?ReservedContext
	    {
	    	return $this->getTypedRuleContext(ReservedContext::class, 0);
	    }

	    public function pri(): ?PriContext
	    {
	    	return $this->getTypedRuleContext(PriContext::class, 0);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function arraydec(): ?ArraydecContext
	    {
	    	return $this->getTypedRuleContext(ArraydecContext::class, 0);
	    }

	    public function returnStmt(): ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function funcCall(): ?FuncCallContext
	    {
	    	return $this->getTypedRuleContext(FuncCallContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterStmts($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitStmts($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitStmts($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PriContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_pri;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class PrintlnContext extends PriContext
	{
		public function __construct(PriContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PRINT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PRINT, 0);
	    }

	    public function lval(): ?LvalContext
	    {
	    	return $this->getTypedRuleContext(LvalContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrintln($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrintln($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrintln($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReservedContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_reserved;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class NowFuncContext extends ReservedContext
	{
		public function __construct(ReservedContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NOW(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NOW, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNowFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNowFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNowFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SubSContext extends ReservedContext
	{
		public function __construct(ReservedContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SUBSTR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SUBSTR, 0);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSubS($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSubS($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSubS($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LenFuncContext extends ReservedContext
	{
		public function __construct(ReservedContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LEN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LEN, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLenFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLenFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLenFunc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TypeOContext extends ReservedContext
	{
		public function __construct(ReservedContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TYPEOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::TYPEOF, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTypeO($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTypeO($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTypeO($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_block;
	    }

	    /**
	     * @return array<StmtsContext>|StmtsContext|null
	     */
	    public function stmts(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtsContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtsContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InstContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_inst;
	    }

	    public function BREAK(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::BREAK, 0);
	    }

	    public function CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::CONTINUE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInst($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_returnStmt;
	    }

	    public function RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RETURN, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReturnStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReturnStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_ifStmt;
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IF, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    /**
	     * @return array<BlockContext>|BlockContext|null
	     */
	    public function block(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BlockContext::class);
	    	}

	        return $this->getTypedRuleContext(BlockContext::class, $index);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ELSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_forStmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ShortForContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FOR, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterShortFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitShortFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitShortFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MidForContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FOR, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMidFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMidFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMidFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LongForContext extends ForStmtContext
	{
		public function __construct(ForStmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FOR, 0);
	    }

	    public function dec(): ?DecContext
	    {
	    	return $this->getTypedRuleContext(DecContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function incdec(): ?IncdecContext
	    {
	    	return $this->getTypedRuleContext(IncdecContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLongFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLongFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLongFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_switchStmt;
	    }

	    public function SWITCH(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SWITCH, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    /**
	     * @return array<CaseClauseContext>|CaseClauseContext|null
	     */
	    public function caseClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CaseClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(CaseClauseContext::class, $index);
	    }

	    public function defaultClause(): ?DefaultClauseContext
	    {
	    	return $this->getTypedRuleContext(DefaultClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CaseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_caseClause;
	    }

	    public function CASE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::CASE, 0);
	    }

	    public function lval(): ?LvalContext
	    {
	    	return $this->getTypedRuleContext(LvalContext::class, 0);
	    }

	    public function stmts(): ?StmtsContext
	    {
	    	return $this->getTypedRuleContext(StmtsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterCaseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitCaseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitCaseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_defaultClause;
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DEFAULT, 0);
	    }

	    public function stmts(): ?StmtsContext
	    {
	    	return $this->getTypedRuleContext(StmtsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDefaultClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDefaultClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDefaultClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_dec;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class DeclvContext extends DecContext
	{
		public function __construct(DecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function pre(): ?PreContext
	    {
	    	return $this->getTypedRuleContext(PreContext::class, 0);
	    }

	    public function lid(): ?LidContext
	    {
	    	return $this->getTypedRuleContext(LidContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function lval(): ?LvalContext
	    {
	    	return $this->getTypedRuleContext(LvalContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDeclv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDeclv($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDeclv($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SdecContext extends DecContext
	{
		public function __construct(DecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function lid(): ?LidContext
	    {
	    	return $this->getTypedRuleContext(LidContext::class, 0);
	    }

	    public function lval(): ?LvalContext
	    {
	    	return $this->getTypedRuleContext(LvalContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSdec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSdec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSdec($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DeclContext extends DecContext
	{
		public function __construct(DecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function pre(): ?PreContext
	    {
	    	return $this->getTypedRuleContext(PreContext::class, 0);
	    }

	    public function lid(): ?LidContext
	    {
	    	return $this->getTypedRuleContext(LidContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArraydecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arraydec;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ShortArrayDecContext extends ArraydecContext
	{
		public function __construct(ArraydecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PVAR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PVAR, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function larray(): ?LarrayContext
	    {
	    	return $this->getTypedRuleContext(LarrayContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterShortArrayDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitShortArrayDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitShortArrayDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LongArrayDecContext extends ArraydecContext
	{
		public function __construct(ArraydecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PVAR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PVAR, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    /**
	     * @return array<LarrayContext>|LarrayContext|null
	     */
	    public function larray(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LarrayContext::class);
	    	}

	        return $this->getTypedRuleContext(LarrayContext::class, $index);
	    }

	    /**
	     * @return array<TypeContext>|TypeContext|null
	     */
	    public function type(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeContext::class, $index);
	    }

	    public function arrayValue(): ?ArrayValueContext
	    {
	    	return $this->getTypedRuleContext(ArrayValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLongArrayDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLongArrayDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLongArrayDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LarrayexpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_larrayexp;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLarrayexp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLarrayexp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLarrayexp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LarrayContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_larray;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function NUM(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::NUM);
	    	}

	        return $this->getToken(GrammarParser::NUM, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLarray($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLarray($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLarray($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayValue;
	    }

	    public function arrayElements(): ?ArrayElementsContext
	    {
	    	return $this->getTypedRuleContext(ArrayElementsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayElementsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayElements;
	    }

	    /**
	     * @return array<ArrayElementContext>|ArrayElementContext|null
	     */
	    public function arrayElement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArrayElementContext::class);
	    	}

	        return $this->getTypedRuleContext(ArrayElementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayElements($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayElements($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayElements($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayElementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayElement;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function arrayValue(): ?ArrayValueContext
	    {
	    	return $this->getTypedRuleContext(ArrayValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayElement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayElement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayElement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AsgContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_asg;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class MultAsigContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMultAsig($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMultAsig($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMultAsig($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAsigContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function larrayexp(): ?LarrayexpContext
	    {
	    	return $this->getTypedRuleContext(LarrayexpContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayAsig($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayAsig($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayAsig($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PlusAsigContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPlusAsig($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPlusAsig($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPlusAsig($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class DivAsigContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDivAsig($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDivAsig($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDivAsig($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IndeContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function incdec(): ?IncdecContext
	    {
	    	return $this->getTypedRuleContext(IncdecContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInde($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInde($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInde($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MinusAsigContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMinusAsig($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMinusAsig($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMinusAsig($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AsigContext extends AsgContext
	{
		public function __construct(AsgContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAsig($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAsig($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAsig($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncdecContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_incdec;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIncdec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIncdec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIncdec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_expr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class MulDivModContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMulDivMod($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMulDivMod($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMulDivMod($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function reserved(): ?ReservedContext
	    {
	    	return $this->getTypedRuleContext(ReservedContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRe($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRe($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRe($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EqNotEqContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterEqNotEq($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitEqNotEq($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitEqNotEq($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AddSubContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAddSub($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAddSub($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAddSub($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParensContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterParens($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitParens($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitParens($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class VaContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function vals(): ?ValsContext
	    {
	    	return $this->getTypedRuleContext(ValsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterVa($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitVa($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitVa($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AndOrContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAndOr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAndOr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAndOr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MoreLessEqContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMoreLessEq($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMoreLessEq($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMoreLessEq($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_vals;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class NilContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NIL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NIL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNil($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNil($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNil($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FloatContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFloat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFloat($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFloat($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayValContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function larrayexp(): ?LarrayexpContext
	    {
	    	return $this->getTypedRuleContext(LarrayexpContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayVal($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayVal($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayVal($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdExprContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIdExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIdExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIdExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NumContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NUM(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NUM, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNum($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNum($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNum($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StringContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitString($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitString($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FcContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function funcCall(): ?FuncCallContext
	    {
	    	return $this->getTypedRuleContext(FuncCallContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BooleContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BOOLE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::BOOLE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBoole($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBoole($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBoole($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RuneContext extends ValsContext
	{
		public function __construct(ValsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RUNE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRune($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRune($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRune($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_funcCall;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class FunReturnContext extends FuncCallContext
	{
		public function __construct(FuncCallContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function lvalpar(): ?LvalparContext
	    {
	    	return $this->getTypedRuleContext(LvalparContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFunReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFunReturn($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFunReturn($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LidContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_lid;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::ID);
	    	}

	        return $this->getToken(GrammarParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLid($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLid($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLid($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $ref
		 */
		public $ref;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_par;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPar($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LvalparContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_lvalpar;
	    }

	    /**
	     * @return array<ParContext>|ParContext|null
	     */
	    public function par(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParContext::class);
	    	}

	        return $this->getTypedRuleContext(ParContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLvalpar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLvalpar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLvalpar($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LvalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_lval;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterLval($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitLval($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitLval($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PreContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_pre;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class VarContext extends PreContext
	{
		public function __construct(PreContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PVAR(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PVAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitVar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitVar($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConstContext extends PreContext
	{
		public function __construct(PreContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PCONST(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PCONST, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitConst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitConst($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_type;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class PstringContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PSTRING(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PSTRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPstring($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPstring($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPstring($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PruneContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PRUNE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PRUNE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrune($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrune($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrune($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PbooleContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PBOOL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PBOOL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPboole($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPboole($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPboole($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PintContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PINT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PINT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPint($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPint($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPint($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FunArrayTypeContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function larray(): ?LarrayContext
	    {
	    	return $this->getTypedRuleContext(LarrayContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFunArrayType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFunArrayType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFunArrayType($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PfloatContext extends TypeContext
	{
		public function __construct(TypeContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PFLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PFLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPfloat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPfloat($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPfloat($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}