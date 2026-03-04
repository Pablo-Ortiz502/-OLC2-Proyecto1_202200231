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
               T__27 = 28, FUNC = 29, MAIN = 30, PVAR = 31, PCONST = 32, 
               IF = 33, ELSE = 34, DEFAULT = 35, CASE = 36, SWITCH = 37, 
               FOR = 38, BREAK = 39, CONTINUE = 40, RETURN = 41, PRINT = 42, 
               SUBSTR = 43, LEN = 44, NOW = 45, TYPEOF = 46, PINT = 47, 
               PFLOAT = 48, PBOOL = 49, PSTRING = 50, PRUNE = 51, NUM = 52, 
               FLOAT = 53, NIL = 54, BOOLE = 55, STRING = 56, RUNE = 57, 
               ID = 58, LINE_COMMENT = 59, BLOCK_COMMENT = 60, WS = 61;

		public const RULE_s = 0, RULE_program = 1, RULE_stmts = 2, RULE_pri = 3, 
               RULE_reserved = 4, RULE_block = 5, RULE_inst = 6, RULE_ifStmt = 7, 
               RULE_forStmt = 8, RULE_switchStmt = 9, RULE_caseClause = 10, 
               RULE_defaultClause = 11, RULE_dec = 12, RULE_asg = 13, RULE_incdec = 14, 
               RULE_expr = 15, RULE_vals = 16, RULE_lid = 17, RULE_lval = 18, 
               RULE_pre = 19, RULE_type = 20;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			's', 'program', 'stmts', 'pri', 'reserved', 'block', 'inst', 'ifStmt', 
			'forStmt', 'switchStmt', 'caseClause', 'defaultClause', 'dec', 'asg', 
			'incdec', 'expr', 'vals', 'lid', 'lval', 'pre', 'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'('", "')'", "','", "'{'", "'}'", "';'", "':'", "'='", "':='", 
		    "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", "'*'", "'/'", "'%'", 
		    "'+'", "'-'", "'=='", "'!='", "'>='", "'<='", "'>'", "'<'", "'&&'", 
		    "'||'", "'func'", "'main'", "'var'", "'const'", "'if'", "'else'", 
		    "'default'", "'case'", "'switch'", "'for'", "'break'", "'continue'", 
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
		    null, null, null, null, null, null, null, "FUNC", "MAIN", "PVAR", 
		    "PCONST", "IF", "ELSE", "DEFAULT", "CASE", "SWITCH", "FOR", "BREAK", 
		    "CONTINUE", "RETURN", "PRINT", "SUBSTR", "LEN", "NOW", "TYPEOF", "PINT", 
		    "PFLOAT", "PBOOL", "PSTRING", "PRUNE", "NUM", "FLOAT", "NIL", "BOOLE", 
		    "STRING", "RUNE", "ID", "LINE_COMMENT", "BLOCK_COMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 61, 249, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 60, 
		    8, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 89, 8, 4, 1, 5, 1, 5, 5, 
		    5, 93, 8, 5, 10, 5, 12, 5, 96, 9, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 7, 
		    1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 107, 8, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 123, 
		    8, 8, 1, 9, 1, 9, 1, 9, 1, 9, 4, 9, 129, 8, 9, 11, 9, 12, 9, 130, 
		    1, 9, 3, 9, 134, 8, 9, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 
		    10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 
		    12, 161, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 3, 13, 
		    179, 8, 13, 1, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 3, 15, 191, 8, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    15, 5, 15, 208, 8, 15, 10, 15, 12, 15, 211, 9, 15, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 16, 220, 8, 16, 1, 17, 1, 17, 1, 
		    17, 5, 17, 225, 8, 17, 10, 17, 12, 17, 228, 9, 17, 1, 18, 1, 18, 1, 
		    18, 5, 18, 233, 8, 18, 10, 18, 12, 18, 236, 9, 18, 1, 19, 1, 19, 3, 
		    19, 240, 8, 19, 1, 20, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 247, 8, 
		    20, 1, 20, 0, 1, 30, 21, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 
		    24, 26, 28, 30, 32, 34, 36, 38, 40, 0, 7, 1, 0, 39, 40, 1, 0, 14, 
		    15, 1, 0, 16, 18, 1, 0, 19, 20, 1, 0, 21, 22, 1, 0, 23, 26, 1, 0, 
		    27, 28, 270, 0, 42, 1, 0, 0, 0, 2, 45, 1, 0, 0, 0, 4, 59, 1, 0, 0, 
		    0, 6, 61, 1, 0, 0, 0, 8, 88, 1, 0, 0, 0, 10, 90, 1, 0, 0, 0, 12, 99, 
		    1, 0, 0, 0, 14, 101, 1, 0, 0, 0, 16, 122, 1, 0, 0, 0, 18, 124, 1, 
		    0, 0, 0, 20, 137, 1, 0, 0, 0, 22, 142, 1, 0, 0, 0, 24, 160, 1, 0, 
		    0, 0, 26, 178, 1, 0, 0, 0, 28, 180, 1, 0, 0, 0, 30, 190, 1, 0, 0, 
		    0, 32, 219, 1, 0, 0, 0, 34, 221, 1, 0, 0, 0, 36, 229, 1, 0, 0, 0, 
		    38, 239, 1, 0, 0, 0, 40, 246, 1, 0, 0, 0, 42, 43, 3, 2, 1, 0, 43, 
		    44, 5, 0, 0, 1, 44, 1, 1, 0, 0, 0, 45, 46, 5, 29, 0, 0, 46, 47, 5, 
		    30, 0, 0, 47, 48, 5, 1, 0, 0, 48, 49, 5, 2, 0, 0, 49, 50, 3, 10, 5, 
		    0, 50, 3, 1, 0, 0, 0, 51, 60, 3, 24, 12, 0, 52, 60, 3, 26, 13, 0, 
		    53, 60, 3, 14, 7, 0, 54, 60, 3, 16, 8, 0, 55, 60, 3, 12, 6, 0, 56, 
		    60, 3, 8, 4, 0, 57, 60, 3, 6, 3, 0, 58, 60, 3, 18, 9, 0, 59, 51, 1, 
		    0, 0, 0, 59, 52, 1, 0, 0, 0, 59, 53, 1, 0, 0, 0, 59, 54, 1, 0, 0, 
		    0, 59, 55, 1, 0, 0, 0, 59, 56, 1, 0, 0, 0, 59, 57, 1, 0, 0, 0, 59, 
		    58, 1, 0, 0, 0, 60, 5, 1, 0, 0, 0, 61, 62, 5, 42, 0, 0, 62, 63, 5, 
		    1, 0, 0, 63, 64, 3, 36, 18, 0, 64, 65, 5, 2, 0, 0, 65, 7, 1, 0, 0, 
		    0, 66, 67, 5, 46, 0, 0, 67, 68, 5, 1, 0, 0, 68, 69, 3, 30, 15, 0, 
		    69, 70, 5, 2, 0, 0, 70, 89, 1, 0, 0, 0, 71, 72, 5, 45, 0, 0, 72, 73, 
		    5, 1, 0, 0, 73, 89, 5, 2, 0, 0, 74, 75, 5, 44, 0, 0, 75, 76, 5, 1, 
		    0, 0, 76, 77, 3, 30, 15, 0, 77, 78, 5, 2, 0, 0, 78, 89, 1, 0, 0, 0, 
		    79, 80, 5, 43, 0, 0, 80, 81, 5, 1, 0, 0, 81, 82, 3, 30, 15, 0, 82, 
		    83, 5, 3, 0, 0, 83, 84, 3, 30, 15, 0, 84, 85, 5, 3, 0, 0, 85, 86, 
		    3, 30, 15, 0, 86, 87, 5, 2, 0, 0, 87, 89, 1, 0, 0, 0, 88, 66, 1, 0, 
		    0, 0, 88, 71, 1, 0, 0, 0, 88, 74, 1, 0, 0, 0, 88, 79, 1, 0, 0, 0, 
		    89, 9, 1, 0, 0, 0, 90, 94, 5, 4, 0, 0, 91, 93, 3, 4, 2, 0, 92, 91, 
		    1, 0, 0, 0, 93, 96, 1, 0, 0, 0, 94, 92, 1, 0, 0, 0, 94, 95, 1, 0, 
		    0, 0, 95, 97, 1, 0, 0, 0, 96, 94, 1, 0, 0, 0, 97, 98, 5, 5, 0, 0, 
		    98, 11, 1, 0, 0, 0, 99, 100, 7, 0, 0, 0, 100, 13, 1, 0, 0, 0, 101, 
		    102, 5, 33, 0, 0, 102, 103, 3, 30, 15, 0, 103, 106, 3, 10, 5, 0, 104, 
		    105, 5, 34, 0, 0, 105, 107, 3, 10, 5, 0, 106, 104, 1, 0, 0, 0, 106, 
		    107, 1, 0, 0, 0, 107, 15, 1, 0, 0, 0, 108, 109, 5, 38, 0, 0, 109, 
		    110, 3, 24, 12, 0, 110, 111, 5, 6, 0, 0, 111, 112, 3, 30, 15, 0, 112, 
		    113, 5, 6, 0, 0, 113, 114, 3, 28, 14, 0, 114, 115, 3, 10, 5, 0, 115, 
		    123, 1, 0, 0, 0, 116, 117, 5, 38, 0, 0, 117, 118, 3, 30, 15, 0, 118, 
		    119, 3, 10, 5, 0, 119, 123, 1, 0, 0, 0, 120, 121, 5, 38, 0, 0, 121, 
		    123, 3, 10, 5, 0, 122, 108, 1, 0, 0, 0, 122, 116, 1, 0, 0, 0, 122, 
		    120, 1, 0, 0, 0, 123, 17, 1, 0, 0, 0, 124, 125, 5, 37, 0, 0, 125, 
		    126, 3, 30, 15, 0, 126, 128, 5, 4, 0, 0, 127, 129, 3, 20, 10, 0, 128, 
		    127, 1, 0, 0, 0, 129, 130, 1, 0, 0, 0, 130, 128, 1, 0, 0, 0, 130, 
		    131, 1, 0, 0, 0, 131, 133, 1, 0, 0, 0, 132, 134, 3, 22, 11, 0, 133, 
		    132, 1, 0, 0, 0, 133, 134, 1, 0, 0, 0, 134, 135, 1, 0, 0, 0, 135, 
		    136, 5, 5, 0, 0, 136, 19, 1, 0, 0, 0, 137, 138, 5, 36, 0, 0, 138, 
		    139, 3, 36, 18, 0, 139, 140, 5, 7, 0, 0, 140, 141, 3, 4, 2, 0, 141, 
		    21, 1, 0, 0, 0, 142, 143, 5, 35, 0, 0, 143, 144, 5, 7, 0, 0, 144, 
		    145, 3, 4, 2, 0, 145, 23, 1, 0, 0, 0, 146, 147, 3, 38, 19, 0, 147, 
		    148, 3, 34, 17, 0, 148, 149, 3, 40, 20, 0, 149, 150, 5, 8, 0, 0, 150, 
		    151, 3, 36, 18, 0, 151, 161, 1, 0, 0, 0, 152, 153, 3, 38, 19, 0, 153, 
		    154, 3, 34, 17, 0, 154, 155, 3, 40, 20, 0, 155, 161, 1, 0, 0, 0, 156, 
		    157, 3, 34, 17, 0, 157, 158, 5, 9, 0, 0, 158, 159, 3, 36, 18, 0, 159, 
		    161, 1, 0, 0, 0, 160, 146, 1, 0, 0, 0, 160, 152, 1, 0, 0, 0, 160, 
		    156, 1, 0, 0, 0, 161, 25, 1, 0, 0, 0, 162, 163, 5, 58, 0, 0, 163, 
		    164, 5, 8, 0, 0, 164, 179, 3, 30, 15, 0, 165, 166, 5, 58, 0, 0, 166, 
		    167, 5, 10, 0, 0, 167, 179, 3, 30, 15, 0, 168, 169, 5, 58, 0, 0, 169, 
		    170, 5, 11, 0, 0, 170, 179, 3, 30, 15, 0, 171, 172, 5, 58, 0, 0, 172, 
		    173, 5, 12, 0, 0, 173, 179, 3, 30, 15, 0, 174, 175, 5, 58, 0, 0, 175, 
		    176, 5, 13, 0, 0, 176, 179, 3, 30, 15, 0, 177, 179, 3, 28, 14, 0, 
		    178, 162, 1, 0, 0, 0, 178, 165, 1, 0, 0, 0, 178, 168, 1, 0, 0, 0, 
		    178, 171, 1, 0, 0, 0, 178, 174, 1, 0, 0, 0, 178, 177, 1, 0, 0, 0, 
		    179, 27, 1, 0, 0, 0, 180, 181, 5, 58, 0, 0, 181, 182, 7, 1, 0, 0, 
		    182, 29, 1, 0, 0, 0, 183, 184, 6, 15, -1, 0, 184, 185, 5, 1, 0, 0, 
		    185, 186, 3, 30, 15, 0, 186, 187, 5, 2, 0, 0, 187, 191, 1, 0, 0, 0, 
		    188, 191, 3, 32, 16, 0, 189, 191, 3, 8, 4, 0, 190, 183, 1, 0, 0, 0, 
		    190, 188, 1, 0, 0, 0, 190, 189, 1, 0, 0, 0, 191, 209, 1, 0, 0, 0, 
		    192, 193, 10, 8, 0, 0, 193, 194, 7, 2, 0, 0, 194, 208, 3, 30, 15, 
		    9, 195, 196, 10, 7, 0, 0, 196, 197, 7, 3, 0, 0, 197, 208, 3, 30, 15, 
		    8, 198, 199, 10, 6, 0, 0, 199, 200, 7, 4, 0, 0, 200, 208, 3, 30, 15, 
		    7, 201, 202, 10, 5, 0, 0, 202, 203, 7, 5, 0, 0, 203, 208, 3, 30, 15, 
		    6, 204, 205, 10, 4, 0, 0, 205, 206, 7, 6, 0, 0, 206, 208, 3, 30, 15, 
		    5, 207, 192, 1, 0, 0, 0, 207, 195, 1, 0, 0, 0, 207, 198, 1, 0, 0, 
		    0, 207, 201, 1, 0, 0, 0, 207, 204, 1, 0, 0, 0, 208, 211, 1, 0, 0, 
		    0, 209, 207, 1, 0, 0, 0, 209, 210, 1, 0, 0, 0, 210, 31, 1, 0, 0, 0, 
		    211, 209, 1, 0, 0, 0, 212, 220, 5, 52, 0, 0, 213, 220, 5, 53, 0, 0, 
		    214, 220, 5, 58, 0, 0, 215, 220, 5, 55, 0, 0, 216, 220, 5, 56, 0, 
		    0, 217, 220, 5, 57, 0, 0, 218, 220, 5, 54, 0, 0, 219, 212, 1, 0, 0, 
		    0, 219, 213, 1, 0, 0, 0, 219, 214, 1, 0, 0, 0, 219, 215, 1, 0, 0, 
		    0, 219, 216, 1, 0, 0, 0, 219, 217, 1, 0, 0, 0, 219, 218, 1, 0, 0, 
		    0, 220, 33, 1, 0, 0, 0, 221, 226, 5, 58, 0, 0, 222, 223, 5, 3, 0, 
		    0, 223, 225, 5, 58, 0, 0, 224, 222, 1, 0, 0, 0, 225, 228, 1, 0, 0, 
		    0, 226, 224, 1, 0, 0, 0, 226, 227, 1, 0, 0, 0, 227, 35, 1, 0, 0, 0, 
		    228, 226, 1, 0, 0, 0, 229, 234, 3, 30, 15, 0, 230, 231, 5, 3, 0, 0, 
		    231, 233, 3, 30, 15, 0, 232, 230, 1, 0, 0, 0, 233, 236, 1, 0, 0, 0, 
		    234, 232, 1, 0, 0, 0, 234, 235, 1, 0, 0, 0, 235, 37, 1, 0, 0, 0, 236, 
		    234, 1, 0, 0, 0, 237, 240, 5, 31, 0, 0, 238, 240, 5, 32, 0, 0, 239, 
		    237, 1, 0, 0, 0, 239, 238, 1, 0, 0, 0, 240, 39, 1, 0, 0, 0, 241, 247, 
		    5, 47, 0, 0, 242, 247, 5, 48, 0, 0, 243, 247, 5, 49, 0, 0, 244, 247, 
		    5, 50, 0, 0, 245, 247, 5, 51, 0, 0, 246, 241, 1, 0, 0, 0, 246, 242, 
		    1, 0, 0, 0, 246, 243, 1, 0, 0, 0, 246, 244, 1, 0, 0, 0, 246, 245, 
		    1, 0, 0, 0, 247, 41, 1, 0, 0, 0, 17, 59, 88, 94, 106, 122, 130, 133, 
		    160, 178, 190, 207, 209, 219, 226, 234, 239, 246];
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
		        $this->setState(42);
		        $this->program();
		        $this->setState(43);
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
		        $this->setState(45);
		        $this->match(self::FUNC);
		        $this->setState(46);
		        $this->match(self::MAIN);
		        $this->setState(47);
		        $this->match(self::T__0);
		        $this->setState(48);
		        $this->match(self::T__1);
		        $this->setState(49);
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
		        $this->setState(59);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(51);
		        	    $this->dec();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(52);
		        	    $this->asg();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(53);
		        	    $this->ifStmt();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(54);
		        	    $this->forStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(55);
		        	    $this->inst();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(56);
		        	    $this->reserved();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(57);
		        	    $this->pri();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(58);
		        	    $this->switchStmt();
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
		        $this->setState(61);
		        $this->match(self::PRINT);
		        $this->setState(62);
		        $this->match(self::T__0);
		        $this->setState(63);
		        $this->lval();
		        $this->setState(64);
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
		        $this->setState(88);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPEOF:
		            	$localContext = new Context\TypeOContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(66);
		            	$this->match(self::TYPEOF);
		            	$this->setState(67);
		            	$this->match(self::T__0);
		            	$this->setState(68);
		            	$this->recursiveExpr(0);
		            	$this->setState(69);
		            	$this->match(self::T__1);
		            	break;

		            case self::NOW:
		            	$localContext = new Context\NowFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(71);
		            	$this->match(self::NOW);
		            	$this->setState(72);
		            	$this->match(self::T__0);
		            	$this->setState(73);
		            	$this->match(self::T__1);
		            	break;

		            case self::LEN:
		            	$localContext = new Context\LenFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(74);
		            	$this->match(self::LEN);
		            	$this->setState(75);
		            	$this->match(self::T__0);
		            	$this->setState(76);
		            	$this->recursiveExpr(0);
		            	$this->setState(77);
		            	$this->match(self::T__1);
		            	break;

		            case self::SUBSTR:
		            	$localContext = new Context\SubSContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(79);
		            	$this->match(self::SUBSTR);
		            	$this->setState(80);
		            	$this->match(self::T__0);
		            	$this->setState(81);
		            	$this->recursiveExpr(0);
		            	$this->setState(82);
		            	$this->match(self::T__2);
		            	$this->setState(83);
		            	$this->recursiveExpr(0);
		            	$this->setState(84);
		            	$this->match(self::T__2);
		            	$this->setState(85);
		            	$this->recursiveExpr(0);
		            	$this->setState(86);
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
		        $this->setState(90);
		        $this->match(self::T__3);
		        $this->setState(94);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 288368792210243584) !== 0)) {
		        	$this->setState(91);
		        	$this->stmts();
		        	$this->setState(96);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(97);
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
		        $this->setState(99);

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
		        $this->setState(101);
		        $this->match(self::IF);
		        $this->setState(102);
		        $this->recursiveExpr(0);
		        $this->setState(103);
		        $this->block();
		        $this->setState(106);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(104);
		        	$this->match(self::ELSE);
		        	$this->setState(105);
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
		        $this->setState(122);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LongForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(108);
		        	    $this->match(self::FOR);
		        	    $this->setState(109);
		        	    $this->dec();
		        	    $this->setState(110);
		        	    $this->match(self::T__5);
		        	    $this->setState(111);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(112);
		        	    $this->match(self::T__5);
		        	    $this->setState(113);
		        	    $this->incdec();
		        	    $this->setState(114);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\MidForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(116);
		        	    $this->match(self::FOR);
		        	    $this->setState(117);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(118);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(120);
		        	    $this->match(self::FOR);
		        	    $this->setState(121);
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
		        $this->setState(124);
		        $this->match(self::SWITCH);
		        $this->setState(125);
		        $this->recursiveExpr(0);
		        $this->setState(126);
		        $this->match(self::T__3);
		        $this->setState(128); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(127);
		        	$this->caseClause();
		        	$this->setState(130); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::CASE);
		        $this->setState(133);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DEFAULT) {
		        	$this->setState(132);
		        	$this->defaultClause();
		        }
		        $this->setState(135);
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
		        $this->setState(137);
		        $this->match(self::CASE);
		        $this->setState(138);
		        $this->lval();
		        $this->setState(139);
		        $this->match(self::T__6);
		        $this->setState(140);
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
		        $this->setState(142);
		        $this->match(self::DEFAULT);
		        $this->setState(143);
		        $this->match(self::T__6);
		        $this->setState(144);
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
		        $this->setState(160);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\DeclvContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(146);
		        	    $this->pre();
		        	    $this->setState(147);
		        	    $this->lid();
		        	    $this->setState(148);
		        	    $this->type();
		        	    $this->setState(149);
		        	    $this->match(self::T__7);
		        	    $this->setState(150);
		        	    $this->lval();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(152);
		        	    $this->pre();
		        	    $this->setState(153);
		        	    $this->lid();
		        	    $this->setState(154);
		        	    $this->type();
		        	break;

		        	case 3:
		        	    $localContext = new Context\SdecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(156);
		        	    $this->lid();
		        	    $this->setState(157);
		        	    $this->match(self::T__8);
		        	    $this->setState(158);
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
		public function asg(): Context\AsgContext
		{
		    $localContext = new Context\AsgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_asg);

		    try {
		        $this->setState(178);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\AsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(162);
		        	    $this->match(self::ID);
		        	    $this->setState(163);
		        	    $this->match(self::T__7);
		        	    $this->setState(164);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 2:
		        	    $localContext = new Context\PlusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(165);
		        	    $this->match(self::ID);
		        	    $this->setState(166);
		        	    $this->match(self::T__9);
		        	    $this->setState(167);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 3:
		        	    $localContext = new Context\MinusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(168);
		        	    $this->match(self::ID);
		        	    $this->setState(169);
		        	    $this->match(self::T__10);
		        	    $this->setState(170);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 4:
		        	    $localContext = new Context\MultAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(171);
		        	    $this->match(self::ID);
		        	    $this->setState(172);
		        	    $this->match(self::T__11);
		        	    $this->setState(173);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 5:
		        	    $localContext = new Context\DivAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(174);
		        	    $this->match(self::ID);
		        	    $this->setState(175);
		        	    $this->match(self::T__12);
		        	    $this->setState(176);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 6:
		        	    $localContext = new Context\IndeContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(177);
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

		    $this->enterRule($localContext, 28, self::RULE_incdec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(180);
		        $this->match(self::ID);
		        $this->setState(181);

		        $localContext->op = $this->input->LT(1);
		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__13 || $_la === self::T__14)) {
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
			$startState = 30;
			$this->enterRecursionRule($localContext, 30, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(190);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__0:
				    	$localContext = new Context\ParensContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(184);
				    	$this->match(self::T__0);
				    	$this->setState(185);
				    	$this->recursiveExpr(0);
				    	$this->setState(186);
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
				    	$this->setState(188);
				    	$this->vals();
				    	break;

				    case self::SUBSTR:
				    case self::LEN:
				    case self::NOW:
				    case self::TYPEOF:
				    	$localContext = new Context\ReContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(189);
				    	$this->reserved();
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(209);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(207);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivModContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(192);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(193);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 458752) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(194);
							    $this->recursiveExpr(9);
							break;

							case 2:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(195);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(196);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__18 || $_la === self::T__19)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(197);
							    $this->recursiveExpr(8);
							break;

							case 3:
							    $localContext = new Context\EqNotEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(198);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(199);

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
							    $this->setState(200);
							    $this->recursiveExpr(7);
							break;

							case 4:
							    $localContext = new Context\MoreLessEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(201);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(202);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 125829120) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(203);
							    $this->recursiveExpr(6);
							break;

							case 5:
							    $localContext = new Context\AndOrContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(204);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(205);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__26 || $_la === self::T__27)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(206);
							    $this->recursiveExpr(5);
							break;
						} 
					}

					$this->setState(211);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);
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

		    $this->enterRule($localContext, 32, self::RULE_vals);

		    try {
		        $this->setState(219);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::NUM:
		            	$localContext = new Context\NumContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(212);
		            	$this->match(self::NUM);
		            	break;

		            case self::FLOAT:
		            	$localContext = new Context\FloatContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(213);
		            	$this->match(self::FLOAT);
		            	break;

		            case self::ID:
		            	$localContext = new Context\IdExprContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(214);
		            	$this->match(self::ID);
		            	break;

		            case self::BOOLE:
		            	$localContext = new Context\BooleContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(215);
		            	$this->match(self::BOOLE);
		            	break;

		            case self::STRING:
		            	$localContext = new Context\StringContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(216);
		            	$this->match(self::STRING);
		            	break;

		            case self::RUNE:
		            	$localContext = new Context\RuneContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(217);
		            	$this->match(self::RUNE);
		            	break;

		            case self::NIL:
		            	$localContext = new Context\NilContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(218);
		            	$this->match(self::NIL);
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
		public function lid(): Context\LidContext
		{
		    $localContext = new Context\LidContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_lid);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(221);
		        $this->match(self::ID);
		        $this->setState(226);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(222);
		        	$this->match(self::T__2);
		        	$this->setState(223);
		        	$this->match(self::ID);
		        	$this->setState(228);
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

		    $this->enterRule($localContext, 36, self::RULE_lval);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(229);
		        $this->recursiveExpr(0);
		        $this->setState(234);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__2) {
		        	$this->setState(230);
		        	$this->match(self::T__2);
		        	$this->setState(231);
		        	$this->recursiveExpr(0);
		        	$this->setState(236);
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

		    $this->enterRule($localContext, 38, self::RULE_pre);

		    try {
		        $this->setState(239);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PVAR:
		            	$localContext = new Context\VarContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(237);
		            	$this->match(self::PVAR);
		            	break;

		            case self::PCONST:
		            	$localContext = new Context\ConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(238);
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

		    $this->enterRule($localContext, 40, self::RULE_type);

		    try {
		        $this->setState(246);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PINT:
		            	$localContext = new Context\PintContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(241);
		            	$this->match(self::PINT);
		            	break;

		            case self::PFLOAT:
		            	$localContext = new Context\PfloatContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(242);
		            	$this->match(self::PFLOAT);
		            	break;

		            case self::PBOOL:
		            	$localContext = new Context\PbooleContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(243);
		            	$this->match(self::PBOOL);
		            	break;

		            case self::PSTRING:
		            	$localContext = new Context\PstringContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(244);
		            	$this->match(self::PSTRING);
		            	break;

		            case self::PRUNE:
		            	$localContext = new Context\PruneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(245);
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
					case 15:
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