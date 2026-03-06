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
               WS = 63;

		public const RULE_s = 0, RULE_program = 1, RULE_stmts = 2, RULE_pri = 3, 
               RULE_reserved = 4, RULE_block = 5, RULE_inst = 6, RULE_ifStmt = 7, 
               RULE_forStmt = 8, RULE_switchStmt = 9, RULE_caseClause = 10, 
               RULE_defaultClause = 11, RULE_dec = 12, RULE_arraydec = 13, 
               RULE_larrayexp = 14, RULE_larray = 15, RULE_arrayValue = 16, 
               RULE_arrayElements = 17, RULE_arrayElement = 18, RULE_asg = 19, 
               RULE_incdec = 20, RULE_expr = 21, RULE_vals = 22, RULE_lid = 23, 
               RULE_lval = 24, RULE_pre = 25, RULE_type = 26;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			's', 'program', 'stmts', 'pri', 'reserved', 'block', 'inst', 'ifStmt', 
			'forStmt', 'switchStmt', 'caseClause', 'defaultClause', 'dec', 'arraydec', 
			'larrayexp', 'larray', 'arrayValue', 'arrayElements', 'arrayElement', 
			'asg', 'incdec', 'expr', 'vals', 'lid', 'lval', 'pre', 'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'('", "')'", "','", "'{'", "'}'", "';'", "':'", "'='", "':='", 
		    "'['", "']'", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", "'*'", 
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
		    "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 63, 326, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 1, 0, 1, 0, 1, 0, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 
		    2, 1, 2, 1, 2, 3, 2, 73, 8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 
		    102, 8, 4, 1, 5, 1, 5, 5, 5, 106, 8, 5, 10, 5, 12, 5, 109, 9, 5, 1, 
		    5, 1, 5, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 120, 8, 7, 
		    1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 
		    1, 8, 1, 8, 1, 8, 3, 8, 136, 8, 8, 1, 9, 1, 9, 1, 9, 1, 9, 4, 9, 142, 
		    8, 9, 11, 9, 12, 9, 143, 1, 9, 3, 9, 147, 8, 9, 1, 9, 1, 9, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 3, 12, 174, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 
		    13, 3, 13, 190, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 1, 
		    14, 5, 14, 199, 8, 14, 10, 14, 12, 14, 202, 9, 14, 1, 15, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 15, 5, 15, 210, 8, 15, 10, 15, 12, 15, 213, 9, 
		    15, 1, 16, 1, 16, 3, 16, 217, 8, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 
		    17, 5, 17, 224, 8, 17, 10, 17, 12, 17, 227, 9, 17, 1, 18, 1, 18, 3, 
		    18, 231, 8, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 
		    19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 254, 8, 19, 1, 20, 1, 20, 1, 20, 
		    1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 3, 21, 266, 8, 21, 
		    1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 
		    21, 1, 21, 1, 21, 1, 21, 1, 21, 1, 21, 5, 21, 283, 8, 21, 10, 21, 
		    12, 21, 286, 9, 21, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 1, 22, 
		    1, 22, 1, 22, 3, 22, 297, 8, 22, 1, 23, 1, 23, 1, 23, 5, 23, 302, 
		    8, 23, 10, 23, 12, 23, 305, 9, 23, 1, 24, 1, 24, 1, 24, 5, 24, 310, 
		    8, 24, 10, 24, 12, 24, 313, 9, 24, 1, 25, 1, 25, 3, 25, 317, 8, 25, 
		    1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 3, 26, 324, 8, 26, 1, 26, 0, 1, 
		    42, 27, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 
		    32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 0, 7, 1, 0, 41, 42, 1, 
		    0, 16, 17, 1, 0, 18, 20, 1, 0, 21, 22, 1, 0, 23, 24, 1, 0, 25, 28, 
		    1, 0, 29, 30, 350, 0, 54, 1, 0, 0, 0, 2, 57, 1, 0, 0, 0, 4, 72, 1, 
		    0, 0, 0, 6, 74, 1, 0, 0, 0, 8, 101, 1, 0, 0, 0, 10, 103, 1, 0, 0, 
		    0, 12, 112, 1, 0, 0, 0, 14, 114, 1, 0, 0, 0, 16, 135, 1, 0, 0, 0, 
		    18, 137, 1, 0, 0, 0, 20, 150, 1, 0, 0, 0, 22, 155, 1, 0, 0, 0, 24, 
		    173, 1, 0, 0, 0, 26, 189, 1, 0, 0, 0, 28, 191, 1, 0, 0, 0, 30, 203, 
		    1, 0, 0, 0, 32, 214, 1, 0, 0, 0, 34, 220, 1, 0, 0, 0, 36, 230, 1, 
		    0, 0, 0, 38, 253, 1, 0, 0, 0, 40, 255, 1, 0, 0, 0, 42, 265, 1, 0, 
		    0, 0, 44, 296, 1, 0, 0, 0, 46, 298, 1, 0, 0, 0, 48, 306, 1, 0, 0, 
		    0, 50, 316, 1, 0, 0, 0, 52, 323, 1, 0, 0, 0, 54, 55, 3, 2, 1, 0, 55, 
		    56, 5, 0, 0, 1, 56, 1, 1, 0, 0, 0, 57, 58, 5, 31, 0, 0, 58, 59, 5, 
		    32, 0, 0, 59, 60, 5, 1, 0, 0, 60, 61, 5, 2, 0, 0, 61, 62, 3, 10, 5, 
		    0, 62, 3, 1, 0, 0, 0, 63, 73, 3, 24, 12, 0, 64, 73, 3, 38, 19, 0, 
		    65, 73, 3, 14, 7, 0, 66, 73, 3, 16, 8, 0, 67, 73, 3, 12, 6, 0, 68, 
		    73, 3, 8, 4, 0, 69, 73, 3, 6, 3, 0, 70, 73, 3, 18, 9, 0, 71, 73, 3, 
		    26, 13, 0, 72, 63, 1, 0, 0, 0, 72, 64, 1, 0, 0, 0, 72, 65, 1, 0, 0, 
		    0, 72, 66, 1, 0, 0, 0, 72, 67, 1, 0, 0, 0, 72, 68, 1, 0, 0, 0, 72, 
		    69, 1, 0, 0, 0, 72, 70, 1, 0, 0, 0, 72, 71, 1, 0, 0, 0, 73, 5, 1, 
		    0, 0, 0, 74, 75, 5, 44, 0, 0, 75, 76, 5, 1, 0, 0, 76, 77, 3, 48, 24, 
		    0, 77, 78, 5, 2, 0, 0, 78, 7, 1, 0, 0, 0, 79, 80, 5, 48, 0, 0, 80, 
		    81, 5, 1, 0, 0, 81, 82, 3, 42, 21, 0, 82, 83, 5, 2, 0, 0, 83, 102, 
		    1, 0, 0, 0, 84, 85, 5, 47, 0, 0, 85, 86, 5, 1, 0, 0, 86, 102, 5, 2, 
		    0, 0, 87, 88, 5, 46, 0, 0, 88, 89, 5, 1, 0, 0, 89, 90, 3, 42, 21, 
		    0, 90, 91, 5, 2, 0, 0, 91, 102, 1, 0, 0, 0, 92, 93, 5, 45, 0, 0, 93, 
		    94, 5, 1, 0, 0, 94, 95, 3, 42, 21, 0, 95, 96, 5, 3, 0, 0, 96, 97, 
		    3, 42, 21, 0, 97, 98, 5, 3, 0, 0, 98, 99, 3, 42, 21, 0, 99, 100, 5, 
		    2, 0, 0, 100, 102, 1, 0, 0, 0, 101, 79, 1, 0, 0, 0, 101, 84, 1, 0, 
		    0, 0, 101, 87, 1, 0, 0, 0, 101, 92, 1, 0, 0, 0, 102, 9, 1, 0, 0, 0, 
		    103, 107, 5, 4, 0, 0, 104, 106, 3, 4, 2, 0, 105, 104, 1, 0, 0, 0, 
		    106, 109, 1, 0, 0, 0, 107, 105, 1, 0, 0, 0, 107, 108, 1, 0, 0, 0, 
		    108, 110, 1, 0, 0, 0, 109, 107, 1, 0, 0, 0, 110, 111, 5, 5, 0, 0, 
		    111, 11, 1, 0, 0, 0, 112, 113, 7, 0, 0, 0, 113, 13, 1, 0, 0, 0, 114, 
		    115, 5, 35, 0, 0, 115, 116, 3, 42, 21, 0, 116, 119, 3, 10, 5, 0, 117, 
		    118, 5, 36, 0, 0, 118, 120, 3, 10, 5, 0, 119, 117, 1, 0, 0, 0, 119, 
		    120, 1, 0, 0, 0, 120, 15, 1, 0, 0, 0, 121, 122, 5, 40, 0, 0, 122, 
		    123, 3, 24, 12, 0, 123, 124, 5, 6, 0, 0, 124, 125, 3, 42, 21, 0, 125, 
		    126, 5, 6, 0, 0, 126, 127, 3, 40, 20, 0, 127, 128, 3, 10, 5, 0, 128, 
		    136, 1, 0, 0, 0, 129, 130, 5, 40, 0, 0, 130, 131, 3, 42, 21, 0, 131, 
		    132, 3, 10, 5, 0, 132, 136, 1, 0, 0, 0, 133, 134, 5, 40, 0, 0, 134, 
		    136, 3, 10, 5, 0, 135, 121, 1, 0, 0, 0, 135, 129, 1, 0, 0, 0, 135, 
		    133, 1, 0, 0, 0, 136, 17, 1, 0, 0, 0, 137, 138, 5, 39, 0, 0, 138, 
		    139, 3, 42, 21, 0, 139, 141, 5, 4, 0, 0, 140, 142, 3, 20, 10, 0, 141, 
		    140, 1, 0, 0, 0, 142, 143, 1, 0, 0, 0, 143, 141, 1, 0, 0, 0, 143, 
		    144, 1, 0, 0, 0, 144, 146, 1, 0, 0, 0, 145, 147, 3, 22, 11, 0, 146, 
		    145, 1, 0, 0, 0, 146, 147, 1, 0, 0, 0, 147, 148, 1, 0, 0, 0, 148, 
		    149, 5, 5, 0, 0, 149, 19, 1, 0, 0, 0, 150, 151, 5, 38, 0, 0, 151, 
		    152, 3, 48, 24, 0, 152, 153, 5, 7, 0, 0, 153, 154, 3, 4, 2, 0, 154, 
		    21, 1, 0, 0, 0, 155, 156, 5, 37, 0, 0, 156, 157, 5, 7, 0, 0, 157, 
		    158, 3, 4, 2, 0, 158, 23, 1, 0, 0, 0, 159, 160, 3, 50, 25, 0, 160, 
		    161, 3, 46, 23, 0, 161, 162, 3, 52, 26, 0, 162, 163, 5, 8, 0, 0, 163, 
		    164, 3, 48, 24, 0, 164, 174, 1, 0, 0, 0, 165, 166, 3, 50, 25, 0, 166, 
		    167, 3, 46, 23, 0, 167, 168, 3, 52, 26, 0, 168, 174, 1, 0, 0, 0, 169, 
		    170, 3, 46, 23, 0, 170, 171, 5, 9, 0, 0, 171, 172, 3, 48, 24, 0, 172, 
		    174, 1, 0, 0, 0, 173, 159, 1, 0, 0, 0, 173, 165, 1, 0, 0, 0, 173, 
		    169, 1, 0, 0, 0, 174, 25, 1, 0, 0, 0, 175, 176, 5, 33, 0, 0, 176, 
		    177, 5, 60, 0, 0, 177, 178, 3, 30, 15, 0, 178, 179, 3, 52, 26, 0, 
		    179, 180, 5, 8, 0, 0, 180, 181, 3, 30, 15, 0, 181, 182, 3, 52, 26, 
		    0, 182, 183, 3, 32, 16, 0, 183, 190, 1, 0, 0, 0, 184, 185, 5, 33, 
		    0, 0, 185, 186, 5, 60, 0, 0, 186, 187, 3, 30, 15, 0, 187, 188, 3, 
		    52, 26, 0, 188, 190, 1, 0, 0, 0, 189, 175, 1, 0, 0, 0, 189, 184, 1, 
		    0, 0, 0, 190, 27, 1, 0, 0, 0, 191, 192, 5, 10, 0, 0, 192, 193, 3, 
		    42, 21, 0, 193, 200, 5, 11, 0, 0, 194, 195, 5, 10, 0, 0, 195, 196, 
		    3, 42, 21, 0, 196, 197, 5, 11, 0, 0, 197, 199, 1, 0, 0, 0, 198, 194, 
		    1, 0, 0, 0, 199, 202, 1, 0, 0, 0, 200, 198, 1, 0, 0, 0, 200, 201, 
		    1, 0, 0, 0, 201, 29, 1, 0, 0, 0, 202, 200, 1, 0, 0, 0, 203, 204, 5, 
		    10, 0, 0, 204, 205, 5, 54, 0, 0, 205, 211, 5, 11, 0, 0, 206, 207, 
		    5, 10, 0, 0, 207, 208, 5, 54, 0, 0, 208, 210, 5, 11, 0, 0, 209, 206, 
		    1, 0, 0, 0, 210, 213, 1, 0, 0, 0, 211, 209, 1, 0, 0, 0, 211, 212, 
		    1, 0, 0, 0, 212, 31, 1, 0, 0, 0, 213, 211, 1, 0, 0, 0, 214, 216, 5, 
		    4, 0, 0, 215, 217, 3, 34, 17, 0, 216, 215, 1, 0, 0, 0, 216, 217, 1, 
		    0, 0, 0, 217, 218, 1, 0, 0, 0, 218, 219, 5, 5, 0, 0, 219, 33, 1, 0, 
		    0, 0, 220, 225, 3, 36, 18, 0, 221, 222, 5, 3, 0, 0, 222, 224, 3, 36, 
		    18, 0, 223, 221, 1, 0, 0, 0, 224, 227, 1, 0, 0, 0, 225, 223, 1, 0, 
		    0, 0, 225, 226, 1, 0, 0, 0, 226, 35, 1, 0, 0, 0, 227, 225, 1, 0, 0, 
		    0, 228, 231, 3, 42, 21, 0, 229, 231, 3, 32, 16, 0, 230, 228, 1, 0, 
		    0, 0, 230, 229, 1, 0, 0, 0, 231, 37, 1, 0, 0, 0, 232, 233, 5, 60, 
		    0, 0, 233, 234, 3, 28, 14, 0, 234, 235, 5, 8, 0, 0, 235, 236, 3, 42, 
		    21, 0, 236, 254, 1, 0, 0, 0, 237, 238, 5, 60, 0, 0, 238, 239, 5, 8, 
		    0, 0, 239, 254, 3, 42, 21, 0, 240, 241, 5, 60, 0, 0, 241, 242, 5, 
		    12, 0, 0, 242, 254, 3, 42, 21, 0, 243, 244, 5, 60, 0, 0, 244, 245, 
		    5, 13, 0, 0, 245, 254, 3, 42, 21, 0, 246, 247, 5, 60, 0, 0, 247, 248, 
		    5, 14, 0, 0, 248, 254, 3, 42, 21, 0, 249, 250, 5, 60, 0, 0, 250, 251, 
		    5, 15, 0, 0, 251, 254, 3, 42, 21, 0, 252, 254, 3, 40, 20, 0, 253, 
		    232, 1, 0, 0, 0, 253, 237, 1, 0, 0, 0, 253, 240, 1, 0, 0, 0, 253, 
		    243, 1, 0, 0, 0, 253, 246, 1, 0, 0, 0, 253, 249, 1, 0, 0, 0, 253, 
		    252, 1, 0, 0, 0, 254, 39, 1, 0, 0, 0, 255, 256, 5, 60, 0, 0, 256, 
		    257, 7, 1, 0, 0, 257, 41, 1, 0, 0, 0, 258, 259, 6, 21, -1, 0, 259, 
		    260, 5, 1, 0, 0, 260, 261, 3, 42, 21, 0, 261, 262, 5, 2, 0, 0, 262, 
		    266, 1, 0, 0, 0, 263, 266, 3, 44, 22, 0, 264, 266, 3, 8, 4, 0, 265, 
		    258, 1, 0, 0, 0, 265, 263, 1, 0, 0, 0, 265, 264, 1, 0, 0, 0, 266, 
		    284, 1, 0, 0, 0, 267, 268, 10, 8, 0, 0, 268, 269, 7, 2, 0, 0, 269, 
		    283, 3, 42, 21, 9, 270, 271, 10, 7, 0, 0, 271, 272, 7, 3, 0, 0, 272, 
		    283, 3, 42, 21, 8, 273, 274, 10, 6, 0, 0, 274, 275, 7, 4, 0, 0, 275, 
		    283, 3, 42, 21, 7, 276, 277, 10, 5, 0, 0, 277, 278, 7, 5, 0, 0, 278, 
		    283, 3, 42, 21, 6, 279, 280, 10, 4, 0, 0, 280, 281, 7, 6, 0, 0, 281, 
		    283, 3, 42, 21, 5, 282, 267, 1, 0, 0, 0, 282, 270, 1, 0, 0, 0, 282, 
		    273, 1, 0, 0, 0, 282, 276, 1, 0, 0, 0, 282, 279, 1, 0, 0, 0, 283, 
		    286, 1, 0, 0, 0, 284, 282, 1, 0, 0, 0, 284, 285, 1, 0, 0, 0, 285, 
		    43, 1, 0, 0, 0, 286, 284, 1, 0, 0, 0, 287, 297, 5, 54, 0, 0, 288, 
		    297, 5, 55, 0, 0, 289, 290, 5, 60, 0, 0, 290, 297, 3, 28, 14, 0, 291, 
		    297, 5, 60, 0, 0, 292, 297, 5, 57, 0, 0, 293, 297, 5, 58, 0, 0, 294, 
		    297, 5, 59, 0, 0, 295, 297, 5, 56, 0, 0, 296, 287, 1, 0, 0, 0, 296, 
		    288, 1, 0, 0, 0, 296, 289, 1, 0, 0, 0, 296, 291, 1, 0, 0, 0, 296, 
		    292, 1, 0, 0, 0, 296, 293, 1, 0, 0, 0, 296, 294, 1, 0, 0, 0, 296, 
		    295, 1, 0, 0, 0, 297, 45, 1, 0, 0, 0, 298, 303, 5, 60, 0, 0, 299, 
		    300, 5, 3, 0, 0, 300, 302, 5, 60, 0, 0, 301, 299, 1, 0, 0, 0, 302, 
		    305, 1, 0, 0, 0, 303, 301, 1, 0, 0, 0, 303, 304, 1, 0, 0, 0, 304, 
		    47, 1, 0, 0, 0, 305, 303, 1, 0, 0, 0, 306, 311, 3, 42, 21, 0, 307, 
		    308, 5, 3, 0, 0, 308, 310, 3, 42, 21, 0, 309, 307, 1, 0, 0, 0, 310, 
		    313, 1, 0, 0, 0, 311, 309, 1, 0, 0, 0, 311, 312, 1, 0, 0, 0, 312, 
		    49, 1, 0, 0, 0, 313, 311, 1, 0, 0, 0, 314, 317, 5, 33, 0, 0, 315, 
		    317, 5, 34, 0, 0, 316, 314, 1, 0, 0, 0, 316, 315, 1, 0, 0, 0, 317, 
		    51, 1, 0, 0, 0, 318, 324, 5, 49, 0, 0, 319, 324, 5, 50, 0, 0, 320, 
		    324, 5, 51, 0, 0, 321, 324, 5, 52, 0, 0, 322, 324, 5, 53, 0, 0, 323, 
		    318, 1, 0, 0, 0, 323, 319, 1, 0, 0, 0, 323, 320, 1, 0, 0, 0, 323, 
		    321, 1, 0, 0, 0, 323, 322, 1, 0, 0, 0, 324, 53, 1, 0, 0, 0, 23, 72, 
		    101, 107, 119, 135, 143, 146, 173, 189, 200, 211, 216, 225, 230, 253, 
		    265, 282, 284, 296, 303, 311, 316, 323];
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
		        $this->setState(54);
		        $this->program();
		        $this->setState(55);
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
		        $this->setState(57);
		        $this->match(self::FUNC);
		        $this->setState(58);
		        $this->match(self::MAIN);
		        $this->setState(59);
		        $this->match(self::T__0);
		        $this->setState(60);
		        $this->match(self::T__1);
		        $this->setState(61);
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
		public function stmts(): Context\StmtsContext
		{
		    $localContext = new Context\StmtsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_stmts);

		    try {
		        $this->setState(72);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(63);
		        	    $this->dec();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(64);
		        	    $this->asg();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(65);
		        	    $this->ifStmt();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(66);
		        	    $this->forStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(67);
		        	    $this->inst();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(68);
		        	    $this->reserved();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(69);
		        	    $this->pri();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(70);
		        	    $this->switchStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(71);
		        	    $this->arraydec();
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

		    $this->enterRule($localContext, 6, self::RULE_pri);

		    try {
		        $localContext = new Context\PrintlnContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);
		        $this->match(self::PRINT);
		        $this->setState(75);
		        $this->match(self::T__0);
		        $this->setState(76);
		        $this->lval();
		        $this->setState(77);
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

		    $this->enterRule($localContext, 8, self::RULE_reserved);

		    try {
		        $this->setState(101);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPEOF:
		            	$localContext = new Context\TypeOContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(79);
		            	$this->match(self::TYPEOF);
		            	$this->setState(80);
		            	$this->match(self::T__0);
		            	$this->setState(81);
		            	$this->recursiveExpr(0);
		            	$this->setState(82);
		            	$this->match(self::T__1);
		            	break;

		            case self::NOW:
		            	$localContext = new Context\NowFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(84);
		            	$this->match(self::NOW);
		            	$this->setState(85);
		            	$this->match(self::T__0);
		            	$this->setState(86);
		            	$this->match(self::T__1);
		            	break;

		            case self::LEN:
		            	$localContext = new Context\LenFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(87);
		            	$this->match(self::LEN);
		            	$this->setState(88);
		            	$this->match(self::T__0);
		            	$this->setState(89);
		            	$this->recursiveExpr(0);
		            	$this->setState(90);
		            	$this->match(self::T__1);
		            	break;

		            case self::SUBSTR:
		            	$localContext = new Context\SubSContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(92);
		            	$this->match(self::SUBSTR);
		            	$this->setState(93);
		            	$this->match(self::T__0);
		            	$this->setState(94);
		            	$this->recursiveExpr(0);
		            	$this->setState(95);
		            	$this->match(self::T__2);
		            	$this->setState(96);
		            	$this->recursiveExpr(0);
		            	$this->setState(97);
		            	$this->match(self::T__2);
		            	$this->setState(98);
		            	$this->recursiveExpr(0);
		            	$this->setState(99);
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

		    $this->enterRule($localContext, 10, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(103);
		        $this->match(self::T__3);
		        $this->setState(107);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1153475168840974336) !== 0)) {
		        	$this->setState(104);
		        	$this->stmts();
		        	$this->setState(109);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(110);
		        $this->match(self::T__4);
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

		    $this->enterRule($localContext, 12, self::RULE_inst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(112);

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
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(114);
		        $this->match(self::IF);
		        $this->setState(115);
		        $this->recursiveExpr(0);
		        $this->setState(116);
		        $this->block();
		        $this->setState(119);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(117);
		        	$this->match(self::ELSE);
		        	$this->setState(118);
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

		    $this->enterRule($localContext, 16, self::RULE_forStmt);

		    try {
		        $this->setState(135);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LongForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(121);
		        	    $this->match(self::FOR);
		        	    $this->setState(122);
		        	    $this->dec();
		        	    $this->setState(123);
		        	    $this->match(self::T__5);
		        	    $this->setState(124);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(125);
		        	    $this->match(self::T__5);
		        	    $this->setState(126);
		        	    $this->incdec();
		        	    $this->setState(127);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\MidForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(129);
		        	    $this->match(self::FOR);
		        	    $this->setState(130);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(131);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(133);
		        	    $this->match(self::FOR);
		        	    $this->setState(134);
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

		    $this->enterRule($localContext, 18, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->match(self::SWITCH);
		        $this->setState(138);
		        $this->recursiveExpr(0);
		        $this->setState(139);
		        $this->match(self::T__3);
		        $this->setState(141); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(140);
		        	$this->caseClause();
		        	$this->setState(143); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::CASE);
		        $this->setState(146);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(145);
		        	$this->defaultClause();
		        }
		        $this->setState(148);
		        $this->match(self::T__4);
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

		    $this->enterRule($localContext, 20, self::RULE_caseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(150);
		        $this->match(self::CASE);
		        $this->setState(151);
		        $this->lval();
		        $this->setState(152);
		        $this->match(self::T__6);
		        $this->setState(153);
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

		    $this->enterRule($localContext, 22, self::RULE_defaultClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(155);
		        $this->match(self::DEFAULT);
		        $this->setState(156);
		        $this->match(self::T__6);
		        $this->setState(157);
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

		    $this->enterRule($localContext, 24, self::RULE_dec);

		    try {
		        $this->setState(173);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\DeclvContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(159);
		        	    $this->pre();
		        	    $this->setState(160);
		        	    $this->lid();
		        	    $this->setState(161);
		        	    $this->type();
		        	    $this->setState(162);
		        	    $this->match(self::T__7);
		        	    $this->setState(163);
		        	    $this->lval();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(165);
		        	    $this->pre();
		        	    $this->setState(166);
		        	    $this->lid();
		        	    $this->setState(167);
		        	    $this->type();
		        	break;

		        	case 3:
		        	    $localContext = new Context\SdecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(169);
		        	    $this->lid();
		        	    $this->setState(170);
		        	    $this->match(self::T__8);
		        	    $this->setState(171);
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

		    $this->enterRule($localContext, 26, self::RULE_arraydec);

		    try {
		        $this->setState(189);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LongArrayDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(175);
		        	    $this->match(self::PVAR);
		        	    $this->setState(176);
		        	    $this->match(self::ID);
		        	    $this->setState(177);
		        	    $this->larray();
		        	    $this->setState(178);
		        	    $this->type();
		        	    $this->setState(179);
		        	    $this->match(self::T__7);
		        	    $this->setState(180);
		        	    $this->larray();
		        	    $this->setState(181);
		        	    $this->type();
		        	    $this->setState(182);
		        	    $this->arrayValue();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ShortArrayDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(184);
		        	    $this->match(self::PVAR);
		        	    $this->setState(185);
		        	    $this->match(self::ID);
		        	    $this->setState(186);
		        	    $this->larray();
		        	    $this->setState(187);
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

		    $this->enterRule($localContext, 28, self::RULE_larrayexp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(191);
		        $this->match(self::T__9);
		        $this->setState(192);
		        $this->recursiveExpr(0);
		        $this->setState(193);
		        $this->match(self::T__10);
		        $this->setState(200);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(194);
		        		$this->match(self::T__9);
		        		$this->setState(195);
		        		$this->recursiveExpr(0);
		        		$this->setState(196);
		        		$this->match(self::T__10); 
		        	}

		        	$this->setState(202);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);
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

		    $this->enterRule($localContext, 30, self::RULE_larray);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(203);
		        $this->match(self::T__9);
		        $this->setState(204);
		        $this->match(self::NUM);
		        $this->setState(205);
		        $this->match(self::T__10);
		        $this->setState(211);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__9) {
		        	$this->setState(206);
		        	$this->match(self::T__9);
		        	$this->setState(207);
		        	$this->match(self::NUM);
		        	$this->setState(208);
		        	$this->match(self::T__10);
		        	$this->setState(213);
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
		public function arrayValue(): Context\ArrayValueContext
		{
		    $localContext = new Context\ArrayValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_arrayValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(214);
		        $this->match(self::T__3);
		        $this->setState(216);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2288356376285544466) !== 0)) {
		        	$this->setState(215);
		        	$this->arrayElements();
		        }
		        $this->setState(218);
		        $this->match(self::T__4);
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

		    $this->enterRule($localContext, 34, self::RULE_arrayElements);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(220);
		        $this->arrayElement();
		        $this->setState(225);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(221);
		        	$this->match(self::T__2);
		        	$this->setState(222);
		        	$this->arrayElement();
		        	$this->setState(227);
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

		    $this->enterRule($localContext, 36, self::RULE_arrayElement);

		    try {
		        $this->setState(230);
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
		            	$this->setState(228);
		            	$this->recursiveExpr(0);
		            	break;

		            case self::T__3:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(229);
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

		    $this->enterRule($localContext, 38, self::RULE_asg);

		    try {
		        $this->setState(253);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ArrayAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(232);
		        	    $this->match(self::ID);
		        	    $this->setState(233);
		        	    $this->larrayexp();
		        	    $this->setState(234);
		        	    $this->match(self::T__7);
		        	    $this->setState(235);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 2:
		        	    $localContext = new Context\AsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(237);
		        	    $this->match(self::ID);
		        	    $this->setState(238);
		        	    $this->match(self::T__7);
		        	    $this->setState(239);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 3:
		        	    $localContext = new Context\PlusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(240);
		        	    $this->match(self::ID);
		        	    $this->setState(241);
		        	    $this->match(self::T__11);
		        	    $this->setState(242);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 4:
		        	    $localContext = new Context\MinusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(243);
		        	    $this->match(self::ID);
		        	    $this->setState(244);
		        	    $this->match(self::T__12);
		        	    $this->setState(245);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 5:
		        	    $localContext = new Context\MultAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(246);
		        	    $this->match(self::ID);
		        	    $this->setState(247);
		        	    $this->match(self::T__13);
		        	    $this->setState(248);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 6:
		        	    $localContext = new Context\DivAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(249);
		        	    $this->match(self::ID);
		        	    $this->setState(250);
		        	    $this->match(self::T__14);
		        	    $this->setState(251);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 7:
		        	    $localContext = new Context\IndeContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(252);
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

		    $this->enterRule($localContext, 40, self::RULE_incdec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(255);
		        $this->match(self::ID);
		        $this->setState(256);

		        $localContext->op = $this->input->LT(1);
		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__15 || $_la === self::T__16)) {
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
			$startState = 42;
			$this->enterRecursionRule($localContext, 42, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(265);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__0:
				    	$localContext = new Context\ParensContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(259);
				    	$this->match(self::T__0);
				    	$this->setState(260);
				    	$this->recursiveExpr(0);
				    	$this->setState(261);
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
				    	$this->setState(263);
				    	$this->vals();
				    	break;

				    case self::SUBSTR:
				    case self::LEN:
				    case self::NOW:
				    case self::TYPEOF:
				    	$localContext = new Context\ReContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(264);
				    	$this->reserved();
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(284);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(282);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivModContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(267);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(268);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1835008) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(269);
							    $this->recursiveExpr(9);
							break;

							case 2:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(270);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(271);

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
							    $this->setState(272);
							    $this->recursiveExpr(8);
							break;

							case 3:
							    $localContext = new Context\EqNotEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(273);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(274);

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
							    $this->setState(275);
							    $this->recursiveExpr(7);
							break;

							case 4:
							    $localContext = new Context\MoreLessEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(276);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(277);

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
							    $this->setState(278);
							    $this->recursiveExpr(6);
							break;

							case 5:
							    $localContext = new Context\AndOrContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(279);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(280);

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
							    $this->setState(281);
							    $this->recursiveExpr(5);
							break;
						} 
					}

					$this->setState(286);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx);
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

		    $this->enterRule($localContext, 44, self::RULE_vals);

		    try {
		        $this->setState(296);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\NumContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(287);
		        	    $this->match(self::NUM);
		        	break;

		        	case 2:
		        	    $localContext = new Context\FloatContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(288);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 3:
		        	    $localContext = new Context\ArrayValContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(289);
		        	    $this->match(self::ID);
		        	    $this->setState(290);
		        	    $this->larrayexp();
		        	break;

		        	case 4:
		        	    $localContext = new Context\IdExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(291);
		        	    $this->match(self::ID);
		        	break;

		        	case 5:
		        	    $localContext = new Context\BooleContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(292);
		        	    $this->match(self::BOOLE);
		        	break;

		        	case 6:
		        	    $localContext = new Context\StringContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(293);
		        	    $this->match(self::STRING);
		        	break;

		        	case 7:
		        	    $localContext = new Context\RuneContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(294);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 8:
		        	    $localContext = new Context\NilContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(295);
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
		public function lid(): Context\LidContext
		{
		    $localContext = new Context\LidContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_lid);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(298);
		        $this->match(self::ID);
		        $this->setState(303);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(299);
		        	$this->match(self::T__2);
		        	$this->setState(300);
		        	$this->match(self::ID);
		        	$this->setState(305);
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

		    $this->enterRule($localContext, 48, self::RULE_lval);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(306);
		        $this->recursiveExpr(0);
		        $this->setState(311);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(307);
		        	$this->match(self::T__2);
		        	$this->setState(308);
		        	$this->recursiveExpr(0);
		        	$this->setState(313);
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

		    $this->enterRule($localContext, 50, self::RULE_pre);

		    try {
		        $this->setState(316);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PVAR:
		            	$localContext = new Context\VarContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(314);
		            	$this->match(self::PVAR);
		            	break;

		            case self::PCONST:
		            	$localContext = new Context\ConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(315);
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

		    $this->enterRule($localContext, 52, self::RULE_type);

		    try {
		        $this->setState(323);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PINT:
		            	$localContext = new Context\PintContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(318);
		            	$this->match(self::PINT);
		            	break;

		            case self::PFLOAT:
		            	$localContext = new Context\PfloatContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(319);
		            	$this->match(self::PFLOAT);
		            	break;

		            case self::PBOOL:
		            	$localContext = new Context\PbooleContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(320);
		            	$this->match(self::PBOOL);
		            	break;

		            case self::PSTRING:
		            	$localContext = new Context\PstringContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(321);
		            	$this->match(self::PSTRING);
		            	break;

		            case self::PRUNE:
		            	$localContext = new Context\PruneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(322);
		            	$this->match(self::PRUNE);
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
					case 21:
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