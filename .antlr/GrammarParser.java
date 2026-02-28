// Generated from ////wsl.localhost//Ubuntu//home//pablo//Compi 2//proyecto2//Grammar.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GrammarParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, T__12=13, T__13=14, T__14=15, T__15=16, T__16=17, 
		T__17=18, T__18=19, T__19=20, T__20=21, T__21=22, T__22=23, T__23=24, 
		T__24=25, T__25=26, T__26=27, FUNC=28, MAIN=29, PVAR=30, PCONST=31, IF=32, 
		ELSE=33, FOR=34, BREAK=35, CONTINUE=36, RETURN=37, PINT=38, PFLOAT=39, 
		PBOOL=40, PSTRING=41, PRUNE=42, NUM=43, FLOAT=44, NIL=45, BOOLE=46, STRING=47, 
		RUNE=48, ID=49, LINE_COMMENT=50, BLOCK_COMMENT=51, WS=52;
	public static final int
		RULE_s = 0, RULE_program = 1, RULE_stmts = 2, RULE_block = 3, RULE_inst = 4, 
		RULE_ifStmt = 5, RULE_forStmt = 6, RULE_forInit = 7, RULE_forCond = 8, 
		RULE_forUpdate = 9, RULE_incDec = 10, RULE_dec = 11, RULE_asg = 12, RULE_expr = 13, 
		RULE_lid = 14, RULE_lval = 15, RULE_pre = 16, RULE_type = 17;
	private static String[] makeRuleNames() {
		return new String[] {
			"s", "program", "stmts", "block", "inst", "ifStmt", "forStmt", "forInit", 
			"forCond", "forUpdate", "incDec", "dec", "asg", "expr", "lid", "lval", 
			"pre", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "'{'", "'}'", "';'", "'++'", "'--'", "'='", "':='", 
			"'+='", "'-='", "'*='", "'/='", "'*'", "'/'", "'%'", "'+'", "'-'", "'=='", 
			"'!='", "'>='", "'<='", "'>'", "'<'", "'&&'", "'||'", "','", "'func'", 
			"'main'", "'var'", "'const'", "'if'", "'else'", "'for'", "'break'", "'continue'", 
			"'return'", "'int32'", "'float32'", "'boole'", "'string'", "'rune'", 
			null, null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, "FUNC", "MAIN", "PVAR", "PCONST", "IF", "ELSE", 
			"FOR", "BREAK", "CONTINUE", "RETURN", "PINT", "PFLOAT", "PBOOL", "PSTRING", 
			"PRUNE", "NUM", "FLOAT", "NIL", "BOOLE", "STRING", "RUNE", "ID", "LINE_COMMENT", 
			"BLOCK_COMMENT", "WS"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Grammar.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GrammarParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SContext extends ParserRuleContext {
		public ProgramContext program() {
			return getRuleContext(ProgramContext.class,0);
		}
		public TerminalNode EOF() { return getToken(GrammarParser.EOF, 0); }
		public SContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_s; }
	}

	public final SContext s() throws RecognitionException {
		SContext _localctx = new SContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_s);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(36);
			program();
			setState(37);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ProgramContext extends ParserRuleContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode MAIN() { return getToken(GrammarParser.MAIN, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ProgramContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_program; }
	}

	public final ProgramContext program() throws RecognitionException {
		ProgramContext _localctx = new ProgramContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_program);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(39);
			match(FUNC);
			setState(40);
			match(MAIN);
			setState(41);
			match(T__0);
			setState(42);
			match(T__1);
			setState(43);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class StmtsContext extends ParserRuleContext {
		public DecContext dec() {
			return getRuleContext(DecContext.class,0);
		}
		public AsgContext asg() {
			return getRuleContext(AsgContext.class,0);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public ForStmtContext forStmt() {
			return getRuleContext(ForStmtContext.class,0);
		}
		public InstContext inst() {
			return getRuleContext(InstContext.class,0);
		}
		public StmtsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_stmts; }
	}

	public final StmtsContext stmts() throws RecognitionException {
		StmtsContext _localctx = new StmtsContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_stmts);
		try {
			setState(50);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,0,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(45);
				dec();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(46);
				asg();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(47);
				ifStmt();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(48);
				forStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(49);
				inst();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BlockContext extends ParserRuleContext {
		public List<StmtsContext> stmts() {
			return getRuleContexts(StmtsContext.class);
		}
		public StmtsContext stmts(int i) {
			return getRuleContext(StmtsContext.class,i);
		}
		public BlockContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_block; }
	}

	public final BlockContext block() throws RecognitionException {
		BlockContext _localctx = new BlockContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(52);
			match(T__2);
			setState(56);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 563077728698368L) != 0)) {
				{
				{
				setState(53);
				stmts();
				}
				}
				setState(58);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(59);
			match(T__3);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class InstContext extends ParserRuleContext {
		public TerminalNode BREAK() { return getToken(GrammarParser.BREAK, 0); }
		public TerminalNode CONTINUE() { return getToken(GrammarParser.CONTINUE, 0); }
		public InstContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_inst; }
	}

	public final InstContext inst() throws RecognitionException {
		InstContext _localctx = new InstContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_inst);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(61);
			_la = _input.LA(1);
			if ( !(_la==BREAK || _la==CONTINUE) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IfStmtContext extends ParserRuleContext {
		public TerminalNode IF() { return getToken(GrammarParser.IF, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public List<BlockContext> block() {
			return getRuleContexts(BlockContext.class);
		}
		public BlockContext block(int i) {
			return getRuleContext(BlockContext.class,i);
		}
		public TerminalNode ELSE() { return getToken(GrammarParser.ELSE, 0); }
		public IfStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_ifStmt; }
	}

	public final IfStmtContext ifStmt() throws RecognitionException {
		IfStmtContext _localctx = new IfStmtContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_ifStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(63);
			match(IF);
			setState(64);
			expr(0);
			setState(65);
			block();
			setState(68);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(66);
				match(ELSE);
				setState(67);
				block();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForStmtContext extends ParserRuleContext {
		public ForStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forStmt; }
	 
		public ForStmtContext() { }
		public void copyFrom(ForStmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ShortForContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GrammarParser.FOR, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ShortForContext(ForStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MidForContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GrammarParser.FOR, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public MidForContext(ForStmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LongForContext extends ForStmtContext {
		public TerminalNode FOR() { return getToken(GrammarParser.FOR, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForInitContext forInit() {
			return getRuleContext(ForInitContext.class,0);
		}
		public ForCondContext forCond() {
			return getRuleContext(ForCondContext.class,0);
		}
		public ForUpdateContext forUpdate() {
			return getRuleContext(ForUpdateContext.class,0);
		}
		public LongForContext(ForStmtContext ctx) { copyFrom(ctx); }
	}

	public final ForStmtContext forStmt() throws RecognitionException {
		ForStmtContext _localctx = new ForStmtContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_forStmt);
		int _la;
		try {
			setState(89);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,6,_ctx) ) {
			case 1:
				_localctx = new LongForContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(70);
				match(FOR);
				setState(72);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 562953174646784L) != 0)) {
					{
					setState(71);
					forInit();
					}
				}

				setState(74);
				match(T__4);
				setState(76);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1117103813820418L) != 0)) {
					{
					setState(75);
					forCond();
					}
				}

				setState(78);
				match(T__4);
				setState(80);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==ID) {
					{
					setState(79);
					forUpdate();
					}
				}

				setState(82);
				block();
				}
				break;
			case 2:
				_localctx = new MidForContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(83);
				match(FOR);
				setState(84);
				expr(0);
				setState(85);
				block();
				}
				break;
			case 3:
				_localctx = new ShortForContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(87);
				match(FOR);
				setState(88);
				block();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForInitContext extends ParserRuleContext {
		public DecContext dec() {
			return getRuleContext(DecContext.class,0);
		}
		public AsgContext asg() {
			return getRuleContext(AsgContext.class,0);
		}
		public ForInitContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forInit; }
	}

	public final ForInitContext forInit() throws RecognitionException {
		ForInitContext _localctx = new ForInitContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_forInit);
		try {
			setState(93);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,7,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(91);
				dec();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(92);
				asg();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForCondContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ForCondContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forCond; }
	}

	public final ForCondContext forCond() throws RecognitionException {
		ForCondContext _localctx = new ForCondContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_forCond);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(95);
			expr(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForUpdateContext extends ParserRuleContext {
		public AsgContext asg() {
			return getRuleContext(AsgContext.class,0);
		}
		public IncDecContext incDec() {
			return getRuleContext(IncDecContext.class,0);
		}
		public ForUpdateContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forUpdate; }
	}

	public final ForUpdateContext forUpdate() throws RecognitionException {
		ForUpdateContext _localctx = new ForUpdateContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_forUpdate);
		try {
			setState(99);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,8,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(97);
				asg();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(98);
				incDec();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IncDecContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public IncDecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_incDec; }
	}

	public final IncDecContext incDec() throws RecognitionException {
		IncDecContext _localctx = new IncDecContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_incDec);
		try {
			setState(105);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,9,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(101);
				match(ID);
				setState(102);
				match(T__5);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(103);
				match(ID);
				setState(104);
				match(T__6);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DecContext extends ParserRuleContext {
		public DecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_dec; }
	 
		public DecContext() { }
		public void copyFrom(DecContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DeclvContext extends DecContext {
		public PreContext pre() {
			return getRuleContext(PreContext.class,0);
		}
		public LidContext lid() {
			return getRuleContext(LidContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public LvalContext lval() {
			return getRuleContext(LvalContext.class,0);
		}
		public DeclvContext(DecContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SdecContext extends DecContext {
		public LidContext lid() {
			return getRuleContext(LidContext.class,0);
		}
		public LvalContext lval() {
			return getRuleContext(LvalContext.class,0);
		}
		public SdecContext(DecContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DeclContext extends DecContext {
		public PreContext pre() {
			return getRuleContext(PreContext.class,0);
		}
		public LidContext lid() {
			return getRuleContext(LidContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public DeclContext(DecContext ctx) { copyFrom(ctx); }
	}

	public final DecContext dec() throws RecognitionException {
		DecContext _localctx = new DecContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_dec);
		try {
			setState(121);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,10,_ctx) ) {
			case 1:
				_localctx = new DeclvContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(107);
				pre();
				setState(108);
				lid();
				setState(109);
				type();
				setState(110);
				match(T__7);
				setState(111);
				lval();
				}
				break;
			case 2:
				_localctx = new DeclContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(113);
				pre();
				setState(114);
				lid();
				setState(115);
				type();
				}
				break;
			case 3:
				_localctx = new SdecContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(117);
				lid();
				setState(118);
				match(T__8);
				setState(119);
				lval();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AsgContext extends ParserRuleContext {
		public AsgContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_asg; }
	 
		public AsgContext() { }
		public void copyFrom(AsgContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MultAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public MultAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PlusAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public PlusAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DivAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public DivAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MinusAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public MinusAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public AsigContext(AsgContext ctx) { copyFrom(ctx); }
	}

	public final AsgContext asg() throws RecognitionException {
		AsgContext _localctx = new AsgContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_asg);
		try {
			setState(138);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
			case 1:
				_localctx = new AsigContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(123);
				match(ID);
				setState(124);
				match(T__7);
				setState(125);
				expr(0);
				}
				break;
			case 2:
				_localctx = new PlusAsigContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(126);
				match(ID);
				setState(127);
				match(T__9);
				setState(128);
				expr(0);
				}
				break;
			case 3:
				_localctx = new MinusAsigContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(129);
				match(ID);
				setState(130);
				match(T__10);
				setState(131);
				expr(0);
				}
				break;
			case 4:
				_localctx = new MultAsigContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(132);
				match(ID);
				setState(133);
				match(T__11);
				setState(134);
				expr(0);
				}
				break;
			case 5:
				_localctx = new DivAsigContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(135);
				match(ID);
				setState(136);
				match(T__12);
				setState(137);
				expr(0);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprContext extends ParserRuleContext {
		public ExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expr; }
	 
		public ExprContext() { }
		public void copyFrom(ExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdExprContext extends ExprContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public IdExprContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddSubContext extends ExprContext {
		public Token op;
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public AddSubContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ParensContext extends ExprContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ParensContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NumContext extends ExprContext {
		public TerminalNode NUM() { return getToken(GrammarParser.NUM, 0); }
		public NumContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StringContext extends ExprContext {
		public TerminalNode STRING() { return getToken(GrammarParser.STRING, 0); }
		public StringContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BooleContext extends ExprContext {
		public TerminalNode BOOLE() { return getToken(GrammarParser.BOOLE, 0); }
		public BooleContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MoreLessEqContext extends ExprContext {
		public Token op;
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public MoreLessEqContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilContext extends ExprContext {
		public TerminalNode NIL() { return getToken(GrammarParser.NIL, 0); }
		public NilContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatContext extends ExprContext {
		public TerminalNode FLOAT() { return getToken(GrammarParser.FLOAT, 0); }
		public FloatContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MulDivModContext extends ExprContext {
		public Token op;
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public MulDivModContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class EqNotEqContext extends ExprContext {
		public Token op;
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public EqNotEqContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RuneContext extends ExprContext {
		public TerminalNode RUNE() { return getToken(GrammarParser.RUNE, 0); }
		public RuneContext(ExprContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AndOrContext extends ExprContext {
		public Token op;
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public AndOrContext(ExprContext ctx) { copyFrom(ctx); }
	}

	public final ExprContext expr() throws RecognitionException {
		return expr(0);
	}

	private ExprContext expr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ExprContext _localctx = new ExprContext(_ctx, _parentState);
		ExprContext _prevctx = _localctx;
		int _startState = 26;
		enterRecursionRule(_localctx, 26, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(152);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
				{
				_localctx = new ParensContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(141);
				match(T__0);
				setState(142);
				expr(0);
				setState(143);
				match(T__1);
				}
				break;
			case NUM:
				{
				_localctx = new NumContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(145);
				match(NUM);
				}
				break;
			case FLOAT:
				{
				_localctx = new FloatContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(146);
				match(FLOAT);
				}
				break;
			case ID:
				{
				_localctx = new IdExprContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(147);
				match(ID);
				}
				break;
			case BOOLE:
				{
				_localctx = new BooleContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(148);
				match(BOOLE);
				}
				break;
			case STRING:
				{
				_localctx = new StringContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(149);
				match(STRING);
				}
				break;
			case RUNE:
				{
				_localctx = new RuneContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(150);
				match(RUNE);
				}
				break;
			case NIL:
				{
				_localctx = new NilContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(151);
				match(NIL);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			_ctx.stop = _input.LT(-1);
			setState(171);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,14,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(169);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivModContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(154);
						if (!(precpred(_ctx, 13))) throw new FailedPredicateException(this, "precpred(_ctx, 13)");
						setState(155);
						((MulDivModContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 114688L) != 0)) ) {
							((MulDivModContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(156);
						expr(14);
						}
						break;
					case 2:
						{
						_localctx = new AddSubContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(157);
						if (!(precpred(_ctx, 12))) throw new FailedPredicateException(this, "precpred(_ctx, 12)");
						setState(158);
						((AddSubContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__16 || _la==T__17) ) {
							((AddSubContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(159);
						expr(13);
						}
						break;
					case 3:
						{
						_localctx = new EqNotEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(160);
						if (!(precpred(_ctx, 11))) throw new FailedPredicateException(this, "precpred(_ctx, 11)");
						setState(161);
						((EqNotEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__18 || _la==T__19) ) {
							((EqNotEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(162);
						expr(12);
						}
						break;
					case 4:
						{
						_localctx = new MoreLessEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(163);
						if (!(precpred(_ctx, 10))) throw new FailedPredicateException(this, "precpred(_ctx, 10)");
						setState(164);
						((MoreLessEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 31457280L) != 0)) ) {
							((MoreLessEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(165);
						expr(11);
						}
						break;
					case 5:
						{
						_localctx = new AndOrContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(166);
						if (!(precpred(_ctx, 9))) throw new FailedPredicateException(this, "precpred(_ctx, 9)");
						setState(167);
						((AndOrContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__24 || _la==T__25) ) {
							((AndOrContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(168);
						expr(10);
						}
						break;
					}
					} 
				}
				setState(173);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,14,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LidContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GrammarParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GrammarParser.ID, i);
		}
		public LidContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_lid; }
	}

	public final LidContext lid() throws RecognitionException {
		LidContext _localctx = new LidContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_lid);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(174);
			match(ID);
			setState(179);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__26) {
				{
				{
				setState(175);
				match(T__26);
				setState(176);
				match(ID);
				}
				}
				setState(181);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LvalContext extends ParserRuleContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public LvalContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_lval; }
	}

	public final LvalContext lval() throws RecognitionException {
		LvalContext _localctx = new LvalContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_lval);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(182);
			expr(0);
			setState(187);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__26) {
				{
				{
				setState(183);
				match(T__26);
				setState(184);
				expr(0);
				}
				}
				setState(189);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PreContext extends ParserRuleContext {
		public PreContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_pre; }
	 
		public PreContext() { }
		public void copyFrom(PreContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class VarContext extends PreContext {
		public TerminalNode PVAR() { return getToken(GrammarParser.PVAR, 0); }
		public VarContext(PreContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ConstContext extends PreContext {
		public TerminalNode PCONST() { return getToken(GrammarParser.PCONST, 0); }
		public ConstContext(PreContext ctx) { copyFrom(ctx); }
	}

	public final PreContext pre() throws RecognitionException {
		PreContext _localctx = new PreContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_pre);
		try {
			setState(192);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PVAR:
				_localctx = new VarContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(190);
				match(PVAR);
				}
				break;
			case PCONST:
				_localctx = new ConstContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(191);
				match(PCONST);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeContext extends ParserRuleContext {
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	 
		public TypeContext() { }
		public void copyFrom(TypeContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PstringContext extends TypeContext {
		public TerminalNode PSTRING() { return getToken(GrammarParser.PSTRING, 0); }
		public PstringContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PruneContext extends TypeContext {
		public TerminalNode PRUNE() { return getToken(GrammarParser.PRUNE, 0); }
		public PruneContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PbooleContext extends TypeContext {
		public TerminalNode PBOOL() { return getToken(GrammarParser.PBOOL, 0); }
		public PbooleContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PintContext extends TypeContext {
		public TerminalNode PINT() { return getToken(GrammarParser.PINT, 0); }
		public PintContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PfloatContext extends TypeContext {
		public TerminalNode PFLOAT() { return getToken(GrammarParser.PFLOAT, 0); }
		public PfloatContext(TypeContext ctx) { copyFrom(ctx); }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_type);
		try {
			setState(199);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PINT:
				_localctx = new PintContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(194);
				match(PINT);
				}
				break;
			case PFLOAT:
				_localctx = new PfloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(195);
				match(PFLOAT);
				}
				break;
			case PBOOL:
				_localctx = new PbooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(196);
				match(PBOOL);
				}
				break;
			case PSTRING:
				_localctx = new PstringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(197);
				match(PSTRING);
				}
				break;
			case PRUNE:
				_localctx = new PruneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(198);
				match(PRUNE);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public boolean sempred(RuleContext _localctx, int ruleIndex, int predIndex) {
		switch (ruleIndex) {
		case 13:
			return expr_sempred((ExprContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expr_sempred(ExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 13);
		case 1:
			return precpred(_ctx, 12);
		case 2:
			return precpred(_ctx, 11);
		case 3:
			return precpred(_ctx, 10);
		case 4:
			return precpred(_ctx, 9);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u00014\u00ca\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0001\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002"+
		"\u0003\u00023\b\u0002\u0001\u0003\u0001\u0003\u0005\u00037\b\u0003\n\u0003"+
		"\f\u0003:\t\u0003\u0001\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0001"+
		"\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0003\u0005E\b"+
		"\u0005\u0001\u0006\u0001\u0006\u0003\u0006I\b\u0006\u0001\u0006\u0001"+
		"\u0006\u0003\u0006M\b\u0006\u0001\u0006\u0001\u0006\u0003\u0006Q\b\u0006"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006"+
		"\u0001\u0006\u0003\u0006Z\b\u0006\u0001\u0007\u0001\u0007\u0003\u0007"+
		"^\b\u0007\u0001\b\u0001\b\u0001\t\u0001\t\u0003\td\b\t\u0001\n\u0001\n"+
		"\u0001\n\u0001\n\u0003\nj\b\n\u0001\u000b\u0001\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\u000b\u0001\u000b\u0001\u000b\u0001\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\u000b\u0001\u000b\u0001\u000b\u0001\u000b\u0003\u000bz\b"+
		"\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f"+
		"\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0003\f\u008b"+
		"\b\f\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0003\r\u0099\b\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0005\r\u00aa\b\r\n\r\f\r\u00ad\t\r\u0001\u000e\u0001"+
		"\u000e\u0001\u000e\u0005\u000e\u00b2\b\u000e\n\u000e\f\u000e\u00b5\t\u000e"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0005\u000f\u00ba\b\u000f\n\u000f"+
		"\f\u000f\u00bd\t\u000f\u0001\u0010\u0001\u0010\u0003\u0010\u00c1\b\u0010"+
		"\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0003\u0011"+
		"\u00c8\b\u0011\u0001\u0011\u0000\u0001\u001a\u0012\u0000\u0002\u0004\u0006"+
		"\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018\u001a\u001c\u001e \"\u0000"+
		"\u0006\u0001\u0000#$\u0001\u0000\u000e\u0010\u0001\u0000\u0011\u0012\u0001"+
		"\u0000\u0013\u0014\u0001\u0000\u0015\u0018\u0001\u0000\u0019\u001a\u00de"+
		"\u0000$\u0001\u0000\u0000\u0000\u0002\'\u0001\u0000\u0000\u0000\u0004"+
		"2\u0001\u0000\u0000\u0000\u00064\u0001\u0000\u0000\u0000\b=\u0001\u0000"+
		"\u0000\u0000\n?\u0001\u0000\u0000\u0000\fY\u0001\u0000\u0000\u0000\u000e"+
		"]\u0001\u0000\u0000\u0000\u0010_\u0001\u0000\u0000\u0000\u0012c\u0001"+
		"\u0000\u0000\u0000\u0014i\u0001\u0000\u0000\u0000\u0016y\u0001\u0000\u0000"+
		"\u0000\u0018\u008a\u0001\u0000\u0000\u0000\u001a\u0098\u0001\u0000\u0000"+
		"\u0000\u001c\u00ae\u0001\u0000\u0000\u0000\u001e\u00b6\u0001\u0000\u0000"+
		"\u0000 \u00c0\u0001\u0000\u0000\u0000\"\u00c7\u0001\u0000\u0000\u0000"+
		"$%\u0003\u0002\u0001\u0000%&\u0005\u0000\u0000\u0001&\u0001\u0001\u0000"+
		"\u0000\u0000\'(\u0005\u001c\u0000\u0000()\u0005\u001d\u0000\u0000)*\u0005"+
		"\u0001\u0000\u0000*+\u0005\u0002\u0000\u0000+,\u0003\u0006\u0003\u0000"+
		",\u0003\u0001\u0000\u0000\u0000-3\u0003\u0016\u000b\u0000.3\u0003\u0018"+
		"\f\u0000/3\u0003\n\u0005\u000003\u0003\f\u0006\u000013\u0003\b\u0004\u0000"+
		"2-\u0001\u0000\u0000\u00002.\u0001\u0000\u0000\u00002/\u0001\u0000\u0000"+
		"\u000020\u0001\u0000\u0000\u000021\u0001\u0000\u0000\u00003\u0005\u0001"+
		"\u0000\u0000\u000048\u0005\u0003\u0000\u000057\u0003\u0004\u0002\u0000"+
		"65\u0001\u0000\u0000\u00007:\u0001\u0000\u0000\u000086\u0001\u0000\u0000"+
		"\u000089\u0001\u0000\u0000\u00009;\u0001\u0000\u0000\u0000:8\u0001\u0000"+
		"\u0000\u0000;<\u0005\u0004\u0000\u0000<\u0007\u0001\u0000\u0000\u0000"+
		"=>\u0007\u0000\u0000\u0000>\t\u0001\u0000\u0000\u0000?@\u0005 \u0000\u0000"+
		"@A\u0003\u001a\r\u0000AD\u0003\u0006\u0003\u0000BC\u0005!\u0000\u0000"+
		"CE\u0003\u0006\u0003\u0000DB\u0001\u0000\u0000\u0000DE\u0001\u0000\u0000"+
		"\u0000E\u000b\u0001\u0000\u0000\u0000FH\u0005\"\u0000\u0000GI\u0003\u000e"+
		"\u0007\u0000HG\u0001\u0000\u0000\u0000HI\u0001\u0000\u0000\u0000IJ\u0001"+
		"\u0000\u0000\u0000JL\u0005\u0005\u0000\u0000KM\u0003\u0010\b\u0000LK\u0001"+
		"\u0000\u0000\u0000LM\u0001\u0000\u0000\u0000MN\u0001\u0000\u0000\u0000"+
		"NP\u0005\u0005\u0000\u0000OQ\u0003\u0012\t\u0000PO\u0001\u0000\u0000\u0000"+
		"PQ\u0001\u0000\u0000\u0000QR\u0001\u0000\u0000\u0000RZ\u0003\u0006\u0003"+
		"\u0000ST\u0005\"\u0000\u0000TU\u0003\u001a\r\u0000UV\u0003\u0006\u0003"+
		"\u0000VZ\u0001\u0000\u0000\u0000WX\u0005\"\u0000\u0000XZ\u0003\u0006\u0003"+
		"\u0000YF\u0001\u0000\u0000\u0000YS\u0001\u0000\u0000\u0000YW\u0001\u0000"+
		"\u0000\u0000Z\r\u0001\u0000\u0000\u0000[^\u0003\u0016\u000b\u0000\\^\u0003"+
		"\u0018\f\u0000][\u0001\u0000\u0000\u0000]\\\u0001\u0000\u0000\u0000^\u000f"+
		"\u0001\u0000\u0000\u0000_`\u0003\u001a\r\u0000`\u0011\u0001\u0000\u0000"+
		"\u0000ad\u0003\u0018\f\u0000bd\u0003\u0014\n\u0000ca\u0001\u0000\u0000"+
		"\u0000cb\u0001\u0000\u0000\u0000d\u0013\u0001\u0000\u0000\u0000ef\u0005"+
		"1\u0000\u0000fj\u0005\u0006\u0000\u0000gh\u00051\u0000\u0000hj\u0005\u0007"+
		"\u0000\u0000ie\u0001\u0000\u0000\u0000ig\u0001\u0000\u0000\u0000j\u0015"+
		"\u0001\u0000\u0000\u0000kl\u0003 \u0010\u0000lm\u0003\u001c\u000e\u0000"+
		"mn\u0003\"\u0011\u0000no\u0005\b\u0000\u0000op\u0003\u001e\u000f\u0000"+
		"pz\u0001\u0000\u0000\u0000qr\u0003 \u0010\u0000rs\u0003\u001c\u000e\u0000"+
		"st\u0003\"\u0011\u0000tz\u0001\u0000\u0000\u0000uv\u0003\u001c\u000e\u0000"+
		"vw\u0005\t\u0000\u0000wx\u0003\u001e\u000f\u0000xz\u0001\u0000\u0000\u0000"+
		"yk\u0001\u0000\u0000\u0000yq\u0001\u0000\u0000\u0000yu\u0001\u0000\u0000"+
		"\u0000z\u0017\u0001\u0000\u0000\u0000{|\u00051\u0000\u0000|}\u0005\b\u0000"+
		"\u0000}\u008b\u0003\u001a\r\u0000~\u007f\u00051\u0000\u0000\u007f\u0080"+
		"\u0005\n\u0000\u0000\u0080\u008b\u0003\u001a\r\u0000\u0081\u0082\u0005"+
		"1\u0000\u0000\u0082\u0083\u0005\u000b\u0000\u0000\u0083\u008b\u0003\u001a"+
		"\r\u0000\u0084\u0085\u00051\u0000\u0000\u0085\u0086\u0005\f\u0000\u0000"+
		"\u0086\u008b\u0003\u001a\r\u0000\u0087\u0088\u00051\u0000\u0000\u0088"+
		"\u0089\u0005\r\u0000\u0000\u0089\u008b\u0003\u001a\r\u0000\u008a{\u0001"+
		"\u0000\u0000\u0000\u008a~\u0001\u0000\u0000\u0000\u008a\u0081\u0001\u0000"+
		"\u0000\u0000\u008a\u0084\u0001\u0000\u0000\u0000\u008a\u0087\u0001\u0000"+
		"\u0000\u0000\u008b\u0019\u0001\u0000\u0000\u0000\u008c\u008d\u0006\r\uffff"+
		"\uffff\u0000\u008d\u008e\u0005\u0001\u0000\u0000\u008e\u008f\u0003\u001a"+
		"\r\u0000\u008f\u0090\u0005\u0002\u0000\u0000\u0090\u0099\u0001\u0000\u0000"+
		"\u0000\u0091\u0099\u0005+\u0000\u0000\u0092\u0099\u0005,\u0000\u0000\u0093"+
		"\u0099\u00051\u0000\u0000\u0094\u0099\u0005.\u0000\u0000\u0095\u0099\u0005"+
		"/\u0000\u0000\u0096\u0099\u00050\u0000\u0000\u0097\u0099\u0005-\u0000"+
		"\u0000\u0098\u008c\u0001\u0000\u0000\u0000\u0098\u0091\u0001\u0000\u0000"+
		"\u0000\u0098\u0092\u0001\u0000\u0000\u0000\u0098\u0093\u0001\u0000\u0000"+
		"\u0000\u0098\u0094\u0001\u0000\u0000\u0000\u0098\u0095\u0001\u0000\u0000"+
		"\u0000\u0098\u0096\u0001\u0000\u0000\u0000\u0098\u0097\u0001\u0000\u0000"+
		"\u0000\u0099\u00ab\u0001\u0000\u0000\u0000\u009a\u009b\n\r\u0000\u0000"+
		"\u009b\u009c\u0007\u0001\u0000\u0000\u009c\u00aa\u0003\u001a\r\u000e\u009d"+
		"\u009e\n\f\u0000\u0000\u009e\u009f\u0007\u0002\u0000\u0000\u009f\u00aa"+
		"\u0003\u001a\r\r\u00a0\u00a1\n\u000b\u0000\u0000\u00a1\u00a2\u0007\u0003"+
		"\u0000\u0000\u00a2\u00aa\u0003\u001a\r\f\u00a3\u00a4\n\n\u0000\u0000\u00a4"+
		"\u00a5\u0007\u0004\u0000\u0000\u00a5\u00aa\u0003\u001a\r\u000b\u00a6\u00a7"+
		"\n\t\u0000\u0000\u00a7\u00a8\u0007\u0005\u0000\u0000\u00a8\u00aa\u0003"+
		"\u001a\r\n\u00a9\u009a\u0001\u0000\u0000\u0000\u00a9\u009d\u0001\u0000"+
		"\u0000\u0000\u00a9\u00a0\u0001\u0000\u0000\u0000\u00a9\u00a3\u0001\u0000"+
		"\u0000\u0000\u00a9\u00a6\u0001\u0000\u0000\u0000\u00aa\u00ad\u0001\u0000"+
		"\u0000\u0000\u00ab\u00a9\u0001\u0000\u0000\u0000\u00ab\u00ac\u0001\u0000"+
		"\u0000\u0000\u00ac\u001b\u0001\u0000\u0000\u0000\u00ad\u00ab\u0001\u0000"+
		"\u0000\u0000\u00ae\u00b3\u00051\u0000\u0000\u00af\u00b0\u0005\u001b\u0000"+
		"\u0000\u00b0\u00b2\u00051\u0000\u0000\u00b1\u00af\u0001\u0000\u0000\u0000"+
		"\u00b2\u00b5\u0001\u0000\u0000\u0000\u00b3\u00b1\u0001\u0000\u0000\u0000"+
		"\u00b3\u00b4\u0001\u0000\u0000\u0000\u00b4\u001d\u0001\u0000\u0000\u0000"+
		"\u00b5\u00b3\u0001\u0000\u0000\u0000\u00b6\u00bb\u0003\u001a\r\u0000\u00b7"+
		"\u00b8\u0005\u001b\u0000\u0000\u00b8\u00ba\u0003\u001a\r\u0000\u00b9\u00b7"+
		"\u0001\u0000\u0000\u0000\u00ba\u00bd\u0001\u0000\u0000\u0000\u00bb\u00b9"+
		"\u0001\u0000\u0000\u0000\u00bb\u00bc\u0001\u0000\u0000\u0000\u00bc\u001f"+
		"\u0001\u0000\u0000\u0000\u00bd\u00bb\u0001\u0000\u0000\u0000\u00be\u00c1"+
		"\u0005\u001e\u0000\u0000\u00bf\u00c1\u0005\u001f\u0000\u0000\u00c0\u00be"+
		"\u0001\u0000\u0000\u0000\u00c0\u00bf\u0001\u0000\u0000\u0000\u00c1!\u0001"+
		"\u0000\u0000\u0000\u00c2\u00c8\u0005&\u0000\u0000\u00c3\u00c8\u0005\'"+
		"\u0000\u0000\u00c4\u00c8\u0005(\u0000\u0000\u00c5\u00c8\u0005)\u0000\u0000"+
		"\u00c6\u00c8\u0005*\u0000\u0000\u00c7\u00c2\u0001\u0000\u0000\u0000\u00c7"+
		"\u00c3\u0001\u0000\u0000\u0000\u00c7\u00c4\u0001\u0000\u0000\u0000\u00c7"+
		"\u00c5\u0001\u0000\u0000\u0000\u00c7\u00c6\u0001\u0000\u0000\u0000\u00c8"+
		"#\u0001\u0000\u0000\u0000\u001328DHLPY]ciy\u008a\u0098\u00a9\u00ab\u00b3"+
		"\u00bb\u00c0\u00c7";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}