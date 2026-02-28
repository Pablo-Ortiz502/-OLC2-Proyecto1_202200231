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
               FUNC = 28, MAIN = 29, PVAR = 30, PCONST = 31, IF = 32, ELSE = 33, 
               FOR = 34, BREAK = 35, CONTINUE = 36, RETURN = 37, PINT = 38, 
               PFLOAT = 39, PBOOL = 40, PSTRING = 41, PRUNE = 42, NUM = 43, 
               FLOAT = 44, NIL = 45, BOOLE = 46, STRING = 47, RUNE = 48, 
               ID = 49, LINE_COMMENT = 50, BLOCK_COMMENT = 51, WS = 52;

		public const RULE_s = 0, RULE_program = 1, RULE_stmts = 2, RULE_block = 3, 
               RULE_inst = 4, RULE_ifStmt = 5, RULE_forStmt = 6, RULE_forInit = 7, 
               RULE_forCond = 8, RULE_forUpdate = 9, RULE_incDec = 10, RULE_dec = 11, 
               RULE_asg = 12, RULE_expr = 13, RULE_lid = 14, RULE_lval = 15, 
               RULE_pre = 16, RULE_type = 17;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			's', 'program', 'stmts', 'block', 'inst', 'ifStmt', 'forStmt', 'forInit', 
			'forCond', 'forUpdate', 'incDec', 'dec', 'asg', 'expr', 'lid', 'lval', 
			'pre', 'type'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'('", "')'", "'{'", "'}'", "';'", "'++'", "'--'", "'='", "':='", 
		    "'+='", "'-='", "'*='", "'/='", "'*'", "'/'", "'%'", "'+'", "'-'", 
		    "'=='", "'!='", "'>='", "'<='", "'>'", "'<'", "'&&'", "'||'", "','", 
		    "'func'", "'main'", "'var'", "'const'", "'if'", "'else'", "'for'", 
		    "'break'", "'continue'", "'return'", "'int32'", "'float32'", "'boole'", 
		    "'string'", "'rune'", null, null, "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, "FUNC", "MAIN", "PVAR", "PCONST", 
		    "IF", "ELSE", "FOR", "BREAK", "CONTINUE", "RETURN", "PINT", "PFLOAT", 
		    "PBOOL", "PSTRING", "PRUNE", "NUM", "FLOAT", "NIL", "BOOLE", "STRING", 
		    "RUNE", "ID", "LINE_COMMENT", "BLOCK_COMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 52, 202, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 1, 0, 1, 0, 1, 0, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 
		    2, 51, 8, 2, 1, 3, 1, 3, 5, 3, 55, 8, 3, 10, 3, 12, 3, 58, 9, 3, 1, 
		    3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 69, 8, 5, 
		    1, 6, 1, 6, 3, 6, 73, 8, 6, 1, 6, 1, 6, 3, 6, 77, 8, 6, 1, 6, 1, 6, 
		    3, 6, 81, 8, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 90, 
		    8, 6, 1, 7, 1, 7, 3, 7, 94, 8, 7, 1, 8, 1, 8, 1, 9, 1, 9, 3, 9, 100, 
		    8, 9, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 106, 8, 10, 1, 11, 1, 11, 
		    1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 
		    11, 1, 11, 1, 11, 3, 11, 122, 8, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 3, 12, 139, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 3, 13, 153, 8, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 5, 13, 170, 8, 13, 10, 13, 12, 13, 
		    173, 9, 13, 1, 14, 1, 14, 1, 14, 5, 14, 178, 8, 14, 10, 14, 12, 14, 
		    181, 9, 14, 1, 15, 1, 15, 1, 15, 5, 15, 186, 8, 15, 10, 15, 12, 15, 
		    189, 9, 15, 1, 16, 1, 16, 3, 16, 193, 8, 16, 1, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 3, 17, 200, 8, 17, 1, 17, 0, 1, 26, 18, 0, 2, 4, 6, 
		    8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 0, 6, 1, 0, 
		    35, 36, 1, 0, 14, 16, 1, 0, 17, 18, 1, 0, 19, 20, 1, 0, 21, 24, 1, 
		    0, 25, 26, 222, 0, 36, 1, 0, 0, 0, 2, 39, 1, 0, 0, 0, 4, 50, 1, 0, 
		    0, 0, 6, 52, 1, 0, 0, 0, 8, 61, 1, 0, 0, 0, 10, 63, 1, 0, 0, 0, 12, 
		    89, 1, 0, 0, 0, 14, 93, 1, 0, 0, 0, 16, 95, 1, 0, 0, 0, 18, 99, 1, 
		    0, 0, 0, 20, 105, 1, 0, 0, 0, 22, 121, 1, 0, 0, 0, 24, 138, 1, 0, 
		    0, 0, 26, 152, 1, 0, 0, 0, 28, 174, 1, 0, 0, 0, 30, 182, 1, 0, 0, 
		    0, 32, 192, 1, 0, 0, 0, 34, 199, 1, 0, 0, 0, 36, 37, 3, 2, 1, 0, 37, 
		    38, 5, 0, 0, 1, 38, 1, 1, 0, 0, 0, 39, 40, 5, 28, 0, 0, 40, 41, 5, 
		    29, 0, 0, 41, 42, 5, 1, 0, 0, 42, 43, 5, 2, 0, 0, 43, 44, 3, 6, 3, 
		    0, 44, 3, 1, 0, 0, 0, 45, 51, 3, 22, 11, 0, 46, 51, 3, 24, 12, 0, 
		    47, 51, 3, 10, 5, 0, 48, 51, 3, 12, 6, 0, 49, 51, 3, 8, 4, 0, 50, 
		    45, 1, 0, 0, 0, 50, 46, 1, 0, 0, 0, 50, 47, 1, 0, 0, 0, 50, 48, 1, 
		    0, 0, 0, 50, 49, 1, 0, 0, 0, 51, 5, 1, 0, 0, 0, 52, 56, 5, 3, 0, 0, 
		    53, 55, 3, 4, 2, 0, 54, 53, 1, 0, 0, 0, 55, 58, 1, 0, 0, 0, 56, 54, 
		    1, 0, 0, 0, 56, 57, 1, 0, 0, 0, 57, 59, 1, 0, 0, 0, 58, 56, 1, 0, 
		    0, 0, 59, 60, 5, 4, 0, 0, 60, 7, 1, 0, 0, 0, 61, 62, 7, 0, 0, 0, 62, 
		    9, 1, 0, 0, 0, 63, 64, 5, 32, 0, 0, 64, 65, 3, 26, 13, 0, 65, 68, 
		    3, 6, 3, 0, 66, 67, 5, 33, 0, 0, 67, 69, 3, 6, 3, 0, 68, 66, 1, 0, 
		    0, 0, 68, 69, 1, 0, 0, 0, 69, 11, 1, 0, 0, 0, 70, 72, 5, 34, 0, 0, 
		    71, 73, 3, 14, 7, 0, 72, 71, 1, 0, 0, 0, 72, 73, 1, 0, 0, 0, 73, 74, 
		    1, 0, 0, 0, 74, 76, 5, 5, 0, 0, 75, 77, 3, 16, 8, 0, 76, 75, 1, 0, 
		    0, 0, 76, 77, 1, 0, 0, 0, 77, 78, 1, 0, 0, 0, 78, 80, 5, 5, 0, 0, 
		    79, 81, 3, 18, 9, 0, 80, 79, 1, 0, 0, 0, 80, 81, 1, 0, 0, 0, 81, 82, 
		    1, 0, 0, 0, 82, 90, 3, 6, 3, 0, 83, 84, 5, 34, 0, 0, 84, 85, 3, 26, 
		    13, 0, 85, 86, 3, 6, 3, 0, 86, 90, 1, 0, 0, 0, 87, 88, 5, 34, 0, 0, 
		    88, 90, 3, 6, 3, 0, 89, 70, 1, 0, 0, 0, 89, 83, 1, 0, 0, 0, 89, 87, 
		    1, 0, 0, 0, 90, 13, 1, 0, 0, 0, 91, 94, 3, 22, 11, 0, 92, 94, 3, 24, 
		    12, 0, 93, 91, 1, 0, 0, 0, 93, 92, 1, 0, 0, 0, 94, 15, 1, 0, 0, 0, 
		    95, 96, 3, 26, 13, 0, 96, 17, 1, 0, 0, 0, 97, 100, 3, 24, 12, 0, 98, 
		    100, 3, 20, 10, 0, 99, 97, 1, 0, 0, 0, 99, 98, 1, 0, 0, 0, 100, 19, 
		    1, 0, 0, 0, 101, 102, 5, 49, 0, 0, 102, 106, 5, 6, 0, 0, 103, 104, 
		    5, 49, 0, 0, 104, 106, 5, 7, 0, 0, 105, 101, 1, 0, 0, 0, 105, 103, 
		    1, 0, 0, 0, 106, 21, 1, 0, 0, 0, 107, 108, 3, 32, 16, 0, 108, 109, 
		    3, 28, 14, 0, 109, 110, 3, 34, 17, 0, 110, 111, 5, 8, 0, 0, 111, 112, 
		    3, 30, 15, 0, 112, 122, 1, 0, 0, 0, 113, 114, 3, 32, 16, 0, 114, 115, 
		    3, 28, 14, 0, 115, 116, 3, 34, 17, 0, 116, 122, 1, 0, 0, 0, 117, 118, 
		    3, 28, 14, 0, 118, 119, 5, 9, 0, 0, 119, 120, 3, 30, 15, 0, 120, 122, 
		    1, 0, 0, 0, 121, 107, 1, 0, 0, 0, 121, 113, 1, 0, 0, 0, 121, 117, 
		    1, 0, 0, 0, 122, 23, 1, 0, 0, 0, 123, 124, 5, 49, 0, 0, 124, 125, 
		    5, 8, 0, 0, 125, 139, 3, 26, 13, 0, 126, 127, 5, 49, 0, 0, 127, 128, 
		    5, 10, 0, 0, 128, 139, 3, 26, 13, 0, 129, 130, 5, 49, 0, 0, 130, 131, 
		    5, 11, 0, 0, 131, 139, 3, 26, 13, 0, 132, 133, 5, 49, 0, 0, 133, 134, 
		    5, 12, 0, 0, 134, 139, 3, 26, 13, 0, 135, 136, 5, 49, 0, 0, 136, 137, 
		    5, 13, 0, 0, 137, 139, 3, 26, 13, 0, 138, 123, 1, 0, 0, 0, 138, 126, 
		    1, 0, 0, 0, 138, 129, 1, 0, 0, 0, 138, 132, 1, 0, 0, 0, 138, 135, 
		    1, 0, 0, 0, 139, 25, 1, 0, 0, 0, 140, 141, 6, 13, -1, 0, 141, 142, 
		    5, 1, 0, 0, 142, 143, 3, 26, 13, 0, 143, 144, 5, 2, 0, 0, 144, 153, 
		    1, 0, 0, 0, 145, 153, 5, 43, 0, 0, 146, 153, 5, 44, 0, 0, 147, 153, 
		    5, 49, 0, 0, 148, 153, 5, 46, 0, 0, 149, 153, 5, 47, 0, 0, 150, 153, 
		    5, 48, 0, 0, 151, 153, 5, 45, 0, 0, 152, 140, 1, 0, 0, 0, 152, 145, 
		    1, 0, 0, 0, 152, 146, 1, 0, 0, 0, 152, 147, 1, 0, 0, 0, 152, 148, 
		    1, 0, 0, 0, 152, 149, 1, 0, 0, 0, 152, 150, 1, 0, 0, 0, 152, 151, 
		    1, 0, 0, 0, 153, 171, 1, 0, 0, 0, 154, 155, 10, 13, 0, 0, 155, 156, 
		    7, 1, 0, 0, 156, 170, 3, 26, 13, 14, 157, 158, 10, 12, 0, 0, 158, 
		    159, 7, 2, 0, 0, 159, 170, 3, 26, 13, 13, 160, 161, 10, 11, 0, 0, 
		    161, 162, 7, 3, 0, 0, 162, 170, 3, 26, 13, 12, 163, 164, 10, 10, 0, 
		    0, 164, 165, 7, 4, 0, 0, 165, 170, 3, 26, 13, 11, 166, 167, 10, 9, 
		    0, 0, 167, 168, 7, 5, 0, 0, 168, 170, 3, 26, 13, 10, 169, 154, 1, 
		    0, 0, 0, 169, 157, 1, 0, 0, 0, 169, 160, 1, 0, 0, 0, 169, 163, 1, 
		    0, 0, 0, 169, 166, 1, 0, 0, 0, 170, 173, 1, 0, 0, 0, 171, 169, 1, 
		    0, 0, 0, 171, 172, 1, 0, 0, 0, 172, 27, 1, 0, 0, 0, 173, 171, 1, 0, 
		    0, 0, 174, 179, 5, 49, 0, 0, 175, 176, 5, 27, 0, 0, 176, 178, 5, 49, 
		    0, 0, 177, 175, 1, 0, 0, 0, 178, 181, 1, 0, 0, 0, 179, 177, 1, 0, 
		    0, 0, 179, 180, 1, 0, 0, 0, 180, 29, 1, 0, 0, 0, 181, 179, 1, 0, 0, 
		    0, 182, 187, 3, 26, 13, 0, 183, 184, 5, 27, 0, 0, 184, 186, 3, 26, 
		    13, 0, 185, 183, 1, 0, 0, 0, 186, 189, 1, 0, 0, 0, 187, 185, 1, 0, 
		    0, 0, 187, 188, 1, 0, 0, 0, 188, 31, 1, 0, 0, 0, 189, 187, 1, 0, 0, 
		    0, 190, 193, 5, 30, 0, 0, 191, 193, 5, 31, 0, 0, 192, 190, 1, 0, 0, 
		    0, 192, 191, 1, 0, 0, 0, 193, 33, 1, 0, 0, 0, 194, 200, 5, 38, 0, 
		    0, 195, 200, 5, 39, 0, 0, 196, 200, 5, 40, 0, 0, 197, 200, 5, 41, 
		    0, 0, 198, 200, 5, 42, 0, 0, 199, 194, 1, 0, 0, 0, 199, 195, 1, 0, 
		    0, 0, 199, 196, 1, 0, 0, 0, 199, 197, 1, 0, 0, 0, 199, 198, 1, 0, 
		    0, 0, 200, 35, 1, 0, 0, 0, 19, 50, 56, 68, 72, 76, 80, 89, 93, 99, 
		    105, 121, 138, 152, 169, 171, 179, 187, 192, 199];
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
		        $this->setState(36);
		        $this->program();
		        $this->setState(37);
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
		        $this->setState(39);
		        $this->match(self::FUNC);
		        $this->setState(40);
		        $this->match(self::MAIN);
		        $this->setState(41);
		        $this->match(self::T__0);
		        $this->setState(42);
		        $this->match(self::T__1);
		        $this->setState(43);
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
		        $this->setState(50);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(45);
		        	    $this->dec();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(46);
		        	    $this->asg();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(47);
		        	    $this->ifStmt();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(48);
		        	    $this->forStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(49);
		        	    $this->inst();
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
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(52);
		        $this->match(self::T__2);
		        $this->setState(56);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 563077728698368) !== 0)) {
		        	$this->setState(53);
		        	$this->stmts();
		        	$this->setState(58);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(59);
		        $this->match(self::T__3);
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

		    $this->enterRule($localContext, 8, self::RULE_inst);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(61);

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

		    $this->enterRule($localContext, 10, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(63);
		        $this->match(self::IF);
		        $this->setState(64);
		        $this->recursiveExpr(0);
		        $this->setState(65);
		        $this->block();
		        $this->setState(68);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(66);
		        	$this->match(self::ELSE);
		        	$this->setState(67);
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

		    $this->enterRule($localContext, 12, self::RULE_forStmt);

		    try {
		        $this->setState(89);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\LongForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(70);
		        	    $this->match(self::FOR);
		        	    $this->setState(72);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 562953174646784) !== 0)) {
		        	    	$this->setState(71);
		        	    	$this->forInit();
		        	    }
		        	    $this->setState(74);
		        	    $this->match(self::T__4);
		        	    $this->setState(76);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1117103813820418) !== 0)) {
		        	    	$this->setState(75);
		        	    	$this->forCond();
		        	    }
		        	    $this->setState(78);
		        	    $this->match(self::T__4);
		        	    $this->setState(80);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::ID) {
		        	    	$this->setState(79);
		        	    	$this->forUpdate();
		        	    }
		        	    $this->setState(82);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $localContext = new Context\MidForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(83);
		        	    $this->match(self::FOR);
		        	    $this->setState(84);
		        	    $this->recursiveExpr(0);
		        	    $this->setState(85);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ShortForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(87);
		        	    $this->match(self::FOR);
		        	    $this->setState(88);
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
		public function forInit(): Context\ForInitContext
		{
		    $localContext = new Context\ForInitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_forInit);

		    try {
		        $this->setState(93);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(91);
		        	    $this->dec();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(92);
		        	    $this->asg();
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
		public function forCond(): Context\ForCondContext
		{
		    $localContext = new Context\ForCondContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_forCond);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
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
		public function forUpdate(): Context\ForUpdateContext
		{
		    $localContext = new Context\ForUpdateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_forUpdate);

		    try {
		        $this->setState(99);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(97);
		        	    $this->asg();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(98);
		        	    $this->incDec();
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
		public function incDec(): Context\IncDecContext
		{
		    $localContext = new Context\IncDecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_incDec);

		    try {
		        $this->setState(105);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(101);
		        	    $this->match(self::ID);
		        	    $this->setState(102);
		        	    $this->match(self::T__5);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(103);
		        	    $this->match(self::ID);
		        	    $this->setState(104);
		        	    $this->match(self::T__6);
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
		public function dec(): Context\DecContext
		{
		    $localContext = new Context\DecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_dec);

		    try {
		        $this->setState(121);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\DeclvContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(107);
		        	    $this->pre();
		        	    $this->setState(108);
		        	    $this->lid();
		        	    $this->setState(109);
		        	    $this->type();
		        	    $this->setState(110);
		        	    $this->match(self::T__7);
		        	    $this->setState(111);
		        	    $this->lval();
		        	break;

		        	case 2:
		        	    $localContext = new Context\DeclContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(113);
		        	    $this->pre();
		        	    $this->setState(114);
		        	    $this->lid();
		        	    $this->setState(115);
		        	    $this->type();
		        	break;

		        	case 3:
		        	    $localContext = new Context\SdecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(117);
		        	    $this->lid();
		        	    $this->setState(118);
		        	    $this->match(self::T__8);
		        	    $this->setState(119);
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

		    $this->enterRule($localContext, 24, self::RULE_asg);

		    try {
		        $this->setState(138);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\AsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(123);
		        	    $this->match(self::ID);
		        	    $this->setState(124);
		        	    $this->match(self::T__7);
		        	    $this->setState(125);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 2:
		        	    $localContext = new Context\PlusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(126);
		        	    $this->match(self::ID);
		        	    $this->setState(127);
		        	    $this->match(self::T__9);
		        	    $this->setState(128);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 3:
		        	    $localContext = new Context\MinusAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(129);
		        	    $this->match(self::ID);
		        	    $this->setState(130);
		        	    $this->match(self::T__10);
		        	    $this->setState(131);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 4:
		        	    $localContext = new Context\MultAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(132);
		        	    $this->match(self::ID);
		        	    $this->setState(133);
		        	    $this->match(self::T__11);
		        	    $this->setState(134);
		        	    $this->recursiveExpr(0);
		        	break;

		        	case 5:
		        	    $localContext = new Context\DivAsigContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(135);
		        	    $this->match(self::ID);
		        	    $this->setState(136);
		        	    $this->match(self::T__12);
		        	    $this->setState(137);
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
			$startState = 26;
			$this->enterRecursionRule($localContext, 26, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(152);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::T__0:
				    	$localContext = new Context\ParensContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(141);
				    	$this->match(self::T__0);
				    	$this->setState(142);
				    	$this->recursiveExpr(0);
				    	$this->setState(143);
				    	$this->match(self::T__1);
				    	break;

				    case self::NUM:
				    	$localContext = new Context\NumContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(145);
				    	$this->match(self::NUM);
				    	break;

				    case self::FLOAT:
				    	$localContext = new Context\FloatContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(146);
				    	$this->match(self::FLOAT);
				    	break;

				    case self::ID:
				    	$localContext = new Context\IdExprContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(147);
				    	$this->match(self::ID);
				    	break;

				    case self::BOOLE:
				    	$localContext = new Context\BooleContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(148);
				    	$this->match(self::BOOLE);
				    	break;

				    case self::STRING:
				    	$localContext = new Context\StringContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(149);
				    	$this->match(self::STRING);
				    	break;

				    case self::RUNE:
				    	$localContext = new Context\RuneContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(150);
				    	$this->match(self::RUNE);
				    	break;

				    case self::NIL:
				    	$localContext = new Context\NilContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(151);
				    	$this->match(self::NIL);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(171);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(169);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
							case 1:
							    $localContext = new Context\MulDivModContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(154);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(155);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 114688) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(156);
							    $this->recursiveExpr(14);
							break;

							case 2:
							    $localContext = new Context\AddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(157);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(158);

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
							    $this->setState(159);
							    $this->recursiveExpr(13);
							break;

							case 3:
							    $localContext = new Context\EqNotEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(160);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(161);

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
							    $this->setState(162);
							    $this->recursiveExpr(12);
							break;

							case 4:
							    $localContext = new Context\MoreLessEqContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(163);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(164);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 31457280) !== 0))) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(165);
							    $this->recursiveExpr(11);
							break;

							case 5:
							    $localContext = new Context\AndOrContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(166);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(167);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::T__24 || $_la === self::T__25)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(168);
							    $this->recursiveExpr(10);
							break;
						} 
					}

					$this->setState(173);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx);
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
		public function lid(): Context\LidContext
		{
		    $localContext = new Context\LidContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_lid);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(174);
		        $this->match(self::ID);
		        $this->setState(179);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__26) {
		        	$this->setState(175);
		        	$this->match(self::T__26);
		        	$this->setState(176);
		        	$this->match(self::ID);
		        	$this->setState(181);
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

		    $this->enterRule($localContext, 30, self::RULE_lval);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(182);
		        $this->recursiveExpr(0);
		        $this->setState(187);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__26) {
		        	$this->setState(183);
		        	$this->match(self::T__26);
		        	$this->setState(184);
		        	$this->recursiveExpr(0);
		        	$this->setState(189);
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

		    $this->enterRule($localContext, 32, self::RULE_pre);

		    try {
		        $this->setState(192);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PVAR:
		            	$localContext = new Context\VarContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(190);
		            	$this->match(self::PVAR);
		            	break;

		            case self::PCONST:
		            	$localContext = new Context\ConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(191);
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

		    $this->enterRule($localContext, 34, self::RULE_type);

		    try {
		        $this->setState(199);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PINT:
		            	$localContext = new Context\PintContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(194);
		            	$this->match(self::PINT);
		            	break;

		            case self::PFLOAT:
		            	$localContext = new Context\PfloatContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(195);
		            	$this->match(self::PFLOAT);
		            	break;

		            case self::PBOOL:
		            	$localContext = new Context\PbooleContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(196);
		            	$this->match(self::PBOOL);
		            	break;

		            case self::PSTRING:
		            	$localContext = new Context\PstringContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(197);
		            	$this->match(self::PSTRING);
		            	break;

		            case self::PRUNE:
		            	$localContext = new Context\PruneContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(198);
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
					case 13:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 13);

			    case 1:
			        return $this->precpred($this->ctx, 12);

			    case 2:
			        return $this->precpred($this->ctx, 11);

			    case 3:
			        return $this->precpred($this->ctx, 10);

			    case 4:
			        return $this->precpred($this->ctx, 9);
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

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function forInit(): ?ForInitContext
	    {
	    	return $this->getTypedRuleContext(ForInitContext::class, 0);
	    }

	    public function forCond(): ?ForCondContext
	    {
	    	return $this->getTypedRuleContext(ForCondContext::class, 0);
	    }

	    public function forUpdate(): ?ForUpdateContext
	    {
	    	return $this->getTypedRuleContext(ForUpdateContext::class, 0);
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

	class ForInitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_forInit;
	    }

	    public function dec(): ?DecContext
	    {
	    	return $this->getTypedRuleContext(DecContext::class, 0);
	    }

	    public function asg(): ?AsgContext
	    {
	    	return $this->getTypedRuleContext(AsgContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterForInit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitForInit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitForInit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForCondContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_forCond;
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterForCond($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitForCond($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitForCond($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForUpdateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_forUpdate;
	    }

	    public function asg(): ?AsgContext
	    {
	    	return $this->getTypedRuleContext(AsgContext::class, 0);
	    }

	    public function incDec(): ?IncDecContext
	    {
	    	return $this->getTypedRuleContext(IncDecContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterForUpdate($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitForUpdate($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitForUpdate($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncDecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_incDec;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIncDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIncDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIncDec($this);
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

	class IdExprContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class NumContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class StringContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class BooleContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class NilContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class FloatContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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

	class RuneContext extends ExprContext
	{
		public function __construct(ExprContext $context)
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