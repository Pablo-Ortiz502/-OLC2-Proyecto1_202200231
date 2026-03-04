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
		T__24=25, T__25=26, T__26=27, T__27=28, FUNC=29, MAIN=30, PVAR=31, PCONST=32, 
		IF=33, ELSE=34, DEFAULT=35, CASE=36, SWITCH=37, FOR=38, BREAK=39, CONTINUE=40, 
		RETURN=41, PRINT=42, SUBSTR=43, LEN=44, NOW=45, TYPEOF=46, PINT=47, PFLOAT=48, 
		PBOOL=49, PSTRING=50, PRUNE=51, NUM=52, FLOAT=53, NIL=54, BOOLE=55, STRING=56, 
		RUNE=57, ID=58, LINE_COMMENT=59, BLOCK_COMMENT=60, WS=61;
	public static final int
		RULE_s = 0, RULE_program = 1, RULE_stmts = 2, RULE_pri = 3, RULE_reserved = 4, 
		RULE_block = 5, RULE_inst = 6, RULE_ifStmt = 7, RULE_forStmt = 8, RULE_switchStmt = 9, 
		RULE_caseClause = 10, RULE_defaultClause = 11, RULE_dec = 12, RULE_asg = 13, 
		RULE_incdec = 14, RULE_expr = 15, RULE_vals = 16, RULE_lid = 17, RULE_lval = 18, 
		RULE_pre = 19, RULE_type = 20;
	private static String[] makeRuleNames() {
		return new String[] {
			"s", "program", "stmts", "pri", "reserved", "block", "inst", "ifStmt", 
			"forStmt", "switchStmt", "caseClause", "defaultClause", "dec", "asg", 
			"incdec", "expr", "vals", "lid", "lval", "pre", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "','", "'{'", "'}'", "';'", "':'", "'='", "':='", 
			"'+='", "'-='", "'*='", "'/='", "'++'", "'--'", "'*'", "'/'", "'%'", 
			"'+'", "'-'", "'=='", "'!='", "'>='", "'<='", "'>'", "'<'", "'&&'", "'||'", 
			"'func'", "'main'", "'var'", "'const'", "'if'", "'else'", "'default'", 
			"'case'", "'switch'", "'for'", "'break'", "'continue'", "'return'", "'fmt.Println'", 
			"'substr'", "'len'", "'now'", "'typeOf'", "'int32'", "'float32'", "'boole'", 
			"'string'", "'rune'", null, null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, "FUNC", "MAIN", "PVAR", "PCONST", "IF", 
			"ELSE", "DEFAULT", "CASE", "SWITCH", "FOR", "BREAK", "CONTINUE", "RETURN", 
			"PRINT", "SUBSTR", "LEN", "NOW", "TYPEOF", "PINT", "PFLOAT", "PBOOL", 
			"PSTRING", "PRUNE", "NUM", "FLOAT", "NIL", "BOOLE", "STRING", "RUNE", 
			"ID", "LINE_COMMENT", "BLOCK_COMMENT", "WS"
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
			setState(42);
			program();
			setState(43);
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
			setState(45);
			match(FUNC);
			setState(46);
			match(MAIN);
			setState(47);
			match(T__0);
			setState(48);
			match(T__1);
			setState(49);
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
		public ReservedContext reserved() {
			return getRuleContext(ReservedContext.class,0);
		}
		public PriContext pri() {
			return getRuleContext(PriContext.class,0);
		}
		public SwitchStmtContext switchStmt() {
			return getRuleContext(SwitchStmtContext.class,0);
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
			setState(59);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,0,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(51);
				dec();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(52);
				asg();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(53);
				ifStmt();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(54);
				forStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(55);
				inst();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(56);
				reserved();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(57);
				pri();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(58);
				switchStmt();
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
	public static class PriContext extends ParserRuleContext {
		public PriContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_pri; }
	 
		public PriContext() { }
		public void copyFrom(PriContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PrintlnContext extends PriContext {
		public TerminalNode PRINT() { return getToken(GrammarParser.PRINT, 0); }
		public LvalContext lval() {
			return getRuleContext(LvalContext.class,0);
		}
		public PrintlnContext(PriContext ctx) { copyFrom(ctx); }
	}

	public final PriContext pri() throws RecognitionException {
		PriContext _localctx = new PriContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_pri);
		try {
			_localctx = new PrintlnContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(61);
			match(PRINT);
			setState(62);
			match(T__0);
			setState(63);
			lval();
			setState(64);
			match(T__1);
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
	public static class ReservedContext extends ParserRuleContext {
		public ReservedContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_reserved; }
	 
		public ReservedContext() { }
		public void copyFrom(ReservedContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NowFuncContext extends ReservedContext {
		public TerminalNode NOW() { return getToken(GrammarParser.NOW, 0); }
		public NowFuncContext(ReservedContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SubSContext extends ReservedContext {
		public TerminalNode SUBSTR() { return getToken(GrammarParser.SUBSTR, 0); }
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public SubSContext(ReservedContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LenFuncContext extends ReservedContext {
		public TerminalNode LEN() { return getToken(GrammarParser.LEN, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public LenFuncContext(ReservedContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class TypeOContext extends ReservedContext {
		public TerminalNode TYPEOF() { return getToken(GrammarParser.TYPEOF, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public TypeOContext(ReservedContext ctx) { copyFrom(ctx); }
	}

	public final ReservedContext reserved() throws RecognitionException {
		ReservedContext _localctx = new ReservedContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_reserved);
		try {
			setState(88);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case TYPEOF:
				_localctx = new TypeOContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(66);
				match(TYPEOF);
				setState(67);
				match(T__0);
				setState(68);
				expr(0);
				setState(69);
				match(T__1);
				}
				break;
			case NOW:
				_localctx = new NowFuncContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(71);
				match(NOW);
				setState(72);
				match(T__0);
				setState(73);
				match(T__1);
				}
				break;
			case LEN:
				_localctx = new LenFuncContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(74);
				match(LEN);
				setState(75);
				match(T__0);
				setState(76);
				expr(0);
				setState(77);
				match(T__1);
				}
				break;
			case SUBSTR:
				_localctx = new SubSContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(79);
				match(SUBSTR);
				setState(80);
				match(T__0);
				setState(81);
				expr(0);
				setState(82);
				match(T__2);
				setState(83);
				expr(0);
				setState(84);
				match(T__2);
				setState(85);
				expr(0);
				setState(86);
				match(T__1);
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
		enterRule(_localctx, 10, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(90);
			match(T__3);
			setState(94);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 288368792210243584L) != 0)) {
				{
				{
				setState(91);
				stmts();
				}
				}
				setState(96);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(97);
			match(T__4);
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
		enterRule(_localctx, 12, RULE_inst);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(99);
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
		enterRule(_localctx, 14, RULE_ifStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(101);
			match(IF);
			setState(102);
			expr(0);
			setState(103);
			block();
			setState(106);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(104);
				match(ELSE);
				setState(105);
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
		public DecContext dec() {
			return getRuleContext(DecContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public IncdecContext incdec() {
			return getRuleContext(IncdecContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public LongForContext(ForStmtContext ctx) { copyFrom(ctx); }
	}

	public final ForStmtContext forStmt() throws RecognitionException {
		ForStmtContext _localctx = new ForStmtContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_forStmt);
		try {
			setState(122);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,4,_ctx) ) {
			case 1:
				_localctx = new LongForContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(108);
				match(FOR);
				setState(109);
				dec();
				setState(110);
				match(T__5);
				setState(111);
				expr(0);
				setState(112);
				match(T__5);
				setState(113);
				incdec();
				setState(114);
				block();
				}
				break;
			case 2:
				_localctx = new MidForContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(116);
				match(FOR);
				setState(117);
				expr(0);
				setState(118);
				block();
				}
				break;
			case 3:
				_localctx = new ShortForContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(120);
				match(FOR);
				setState(121);
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
	public static class SwitchStmtContext extends ParserRuleContext {
		public TerminalNode SWITCH() { return getToken(GrammarParser.SWITCH, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public List<CaseClauseContext> caseClause() {
			return getRuleContexts(CaseClauseContext.class);
		}
		public CaseClauseContext caseClause(int i) {
			return getRuleContext(CaseClauseContext.class,i);
		}
		public DefaultClauseContext defaultClause() {
			return getRuleContext(DefaultClauseContext.class,0);
		}
		public SwitchStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchStmt; }
	}

	public final SwitchStmtContext switchStmt() throws RecognitionException {
		SwitchStmtContext _localctx = new SwitchStmtContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_switchStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(124);
			match(SWITCH);
			setState(125);
			expr(0);
			setState(126);
			match(T__3);
			setState(128); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(127);
				caseClause();
				}
				}
				setState(130); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==CASE );
			setState(133);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(132);
				defaultClause();
				}
			}

			setState(135);
			match(T__4);
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
	public static class CaseClauseContext extends ParserRuleContext {
		public TerminalNode CASE() { return getToken(GrammarParser.CASE, 0); }
		public LvalContext lval() {
			return getRuleContext(LvalContext.class,0);
		}
		public StmtsContext stmts() {
			return getRuleContext(StmtsContext.class,0);
		}
		public CaseClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_caseClause; }
	}

	public final CaseClauseContext caseClause() throws RecognitionException {
		CaseClauseContext _localctx = new CaseClauseContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_caseClause);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(137);
			match(CASE);
			setState(138);
			lval();
			setState(139);
			match(T__6);
			setState(140);
			stmts();
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
	public static class DefaultClauseContext extends ParserRuleContext {
		public TerminalNode DEFAULT() { return getToken(GrammarParser.DEFAULT, 0); }
		public StmtsContext stmts() {
			return getRuleContext(StmtsContext.class,0);
		}
		public DefaultClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_defaultClause; }
	}

	public final DefaultClauseContext defaultClause() throws RecognitionException {
		DefaultClauseContext _localctx = new DefaultClauseContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_defaultClause);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(142);
			match(DEFAULT);
			setState(143);
			match(T__6);
			setState(144);
			stmts();
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
		enterRule(_localctx, 24, RULE_dec);
		try {
			setState(160);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,7,_ctx) ) {
			case 1:
				_localctx = new DeclvContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(146);
				pre();
				setState(147);
				lid();
				setState(148);
				type();
				setState(149);
				match(T__7);
				setState(150);
				lval();
				}
				break;
			case 2:
				_localctx = new DeclContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(152);
				pre();
				setState(153);
				lid();
				setState(154);
				type();
				}
				break;
			case 3:
				_localctx = new SdecContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(156);
				lid();
				setState(157);
				match(T__8);
				setState(158);
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
	public static class IndeContext extends AsgContext {
		public IncdecContext incdec() {
			return getRuleContext(IncdecContext.class,0);
		}
		public IndeContext(AsgContext ctx) { copyFrom(ctx); }
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
		enterRule(_localctx, 26, RULE_asg);
		try {
			setState(178);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,8,_ctx) ) {
			case 1:
				_localctx = new AsigContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(162);
				match(ID);
				setState(163);
				match(T__7);
				setState(164);
				expr(0);
				}
				break;
			case 2:
				_localctx = new PlusAsigContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(165);
				match(ID);
				setState(166);
				match(T__9);
				setState(167);
				expr(0);
				}
				break;
			case 3:
				_localctx = new MinusAsigContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(168);
				match(ID);
				setState(169);
				match(T__10);
				setState(170);
				expr(0);
				}
				break;
			case 4:
				_localctx = new MultAsigContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(171);
				match(ID);
				setState(172);
				match(T__11);
				setState(173);
				expr(0);
				}
				break;
			case 5:
				_localctx = new DivAsigContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(174);
				match(ID);
				setState(175);
				match(T__12);
				setState(176);
				expr(0);
				}
				break;
			case 6:
				_localctx = new IndeContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(177);
				incdec();
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
	public static class IncdecContext extends ParserRuleContext {
		public Token op;
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public IncdecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_incdec; }
	}

	public final IncdecContext incdec() throws RecognitionException {
		IncdecContext _localctx = new IncdecContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_incdec);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(180);
			match(ID);
			setState(181);
			((IncdecContext)_localctx).op = _input.LT(1);
			_la = _input.LA(1);
			if ( !(_la==T__13 || _la==T__14) ) {
				((IncdecContext)_localctx).op = (Token)_errHandler.recoverInline(this);
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
	public static class ReContext extends ExprContext {
		public ReservedContext reserved() {
			return getRuleContext(ReservedContext.class,0);
		}
		public ReContext(ExprContext ctx) { copyFrom(ctx); }
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
	public static class VaContext extends ExprContext {
		public ValsContext vals() {
			return getRuleContext(ValsContext.class,0);
		}
		public VaContext(ExprContext ctx) { copyFrom(ctx); }
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

	public final ExprContext expr() throws RecognitionException {
		return expr(0);
	}

	private ExprContext expr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ExprContext _localctx = new ExprContext(_ctx, _parentState);
		ExprContext _prevctx = _localctx;
		int _startState = 30;
		enterRecursionRule(_localctx, 30, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(190);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
				{
				_localctx = new ParensContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(184);
				match(T__0);
				setState(185);
				expr(0);
				setState(186);
				match(T__1);
				}
				break;
			case NUM:
			case FLOAT:
			case NIL:
			case BOOLE:
			case STRING:
			case RUNE:
			case ID:
				{
				_localctx = new VaContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(188);
				vals();
				}
				break;
			case SUBSTR:
			case LEN:
			case NOW:
			case TYPEOF:
				{
				_localctx = new ReContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(189);
				reserved();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			_ctx.stop = _input.LT(-1);
			setState(209);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,11,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(207);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,10,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivModContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(192);
						if (!(precpred(_ctx, 8))) throw new FailedPredicateException(this, "precpred(_ctx, 8)");
						setState(193);
						((MulDivModContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 458752L) != 0)) ) {
							((MulDivModContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(194);
						expr(9);
						}
						break;
					case 2:
						{
						_localctx = new AddSubContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(195);
						if (!(precpred(_ctx, 7))) throw new FailedPredicateException(this, "precpred(_ctx, 7)");
						setState(196);
						((AddSubContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__18 || _la==T__19) ) {
							((AddSubContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(197);
						expr(8);
						}
						break;
					case 3:
						{
						_localctx = new EqNotEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(198);
						if (!(precpred(_ctx, 6))) throw new FailedPredicateException(this, "precpred(_ctx, 6)");
						setState(199);
						((EqNotEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__20 || _la==T__21) ) {
							((EqNotEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(200);
						expr(7);
						}
						break;
					case 4:
						{
						_localctx = new MoreLessEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(201);
						if (!(precpred(_ctx, 5))) throw new FailedPredicateException(this, "precpred(_ctx, 5)");
						setState(202);
						((MoreLessEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 125829120L) != 0)) ) {
							((MoreLessEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(203);
						expr(6);
						}
						break;
					case 5:
						{
						_localctx = new AndOrContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(204);
						if (!(precpred(_ctx, 4))) throw new FailedPredicateException(this, "precpred(_ctx, 4)");
						setState(205);
						((AndOrContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__26 || _la==T__27) ) {
							((AndOrContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(206);
						expr(5);
						}
						break;
					}
					} 
				}
				setState(211);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,11,_ctx);
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
	public static class ValsContext extends ParserRuleContext {
		public ValsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_vals; }
	 
		public ValsContext() { }
		public void copyFrom(ValsContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilContext extends ValsContext {
		public TerminalNode NIL() { return getToken(GrammarParser.NIL, 0); }
		public NilContext(ValsContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatContext extends ValsContext {
		public TerminalNode FLOAT() { return getToken(GrammarParser.FLOAT, 0); }
		public FloatContext(ValsContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IdExprContext extends ValsContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public IdExprContext(ValsContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NumContext extends ValsContext {
		public TerminalNode NUM() { return getToken(GrammarParser.NUM, 0); }
		public NumContext(ValsContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StringContext extends ValsContext {
		public TerminalNode STRING() { return getToken(GrammarParser.STRING, 0); }
		public StringContext(ValsContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BooleContext extends ValsContext {
		public TerminalNode BOOLE() { return getToken(GrammarParser.BOOLE, 0); }
		public BooleContext(ValsContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RuneContext extends ValsContext {
		public TerminalNode RUNE() { return getToken(GrammarParser.RUNE, 0); }
		public RuneContext(ValsContext ctx) { copyFrom(ctx); }
	}

	public final ValsContext vals() throws RecognitionException {
		ValsContext _localctx = new ValsContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_vals);
		try {
			setState(219);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case NUM:
				_localctx = new NumContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(212);
				match(NUM);
				}
				break;
			case FLOAT:
				_localctx = new FloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(213);
				match(FLOAT);
				}
				break;
			case ID:
				_localctx = new IdExprContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(214);
				match(ID);
				}
				break;
			case BOOLE:
				_localctx = new BooleContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(215);
				match(BOOLE);
				}
				break;
			case STRING:
				_localctx = new StringContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(216);
				match(STRING);
				}
				break;
			case RUNE:
				_localctx = new RuneContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(217);
				match(RUNE);
				}
				break;
			case NIL:
				_localctx = new NilContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(218);
				match(NIL);
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
		enterRule(_localctx, 34, RULE_lid);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(221);
			match(ID);
			setState(226);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(222);
				match(T__2);
				setState(223);
				match(ID);
				}
				}
				setState(228);
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
		enterRule(_localctx, 36, RULE_lval);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(229);
			expr(0);
			setState(234);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(230);
				match(T__2);
				setState(231);
				expr(0);
				}
				}
				setState(236);
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
		enterRule(_localctx, 38, RULE_pre);
		try {
			setState(239);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PVAR:
				_localctx = new VarContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(237);
				match(PVAR);
				}
				break;
			case PCONST:
				_localctx = new ConstContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(238);
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
		enterRule(_localctx, 40, RULE_type);
		try {
			setState(246);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PINT:
				_localctx = new PintContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(241);
				match(PINT);
				}
				break;
			case PFLOAT:
				_localctx = new PfloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(242);
				match(PFLOAT);
				}
				break;
			case PBOOL:
				_localctx = new PbooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(243);
				match(PBOOL);
				}
				break;
			case PSTRING:
				_localctx = new PstringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(244);
				match(PSTRING);
				}
				break;
			case PRUNE:
				_localctx = new PruneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(245);
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
		case 15:
			return expr_sempred((ExprContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expr_sempred(ExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 8);
		case 1:
			return precpred(_ctx, 7);
		case 2:
			return precpred(_ctx, 6);
		case 3:
			return precpred(_ctx, 5);
		case 4:
			return precpred(_ctx, 4);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u0001=\u00f9\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0001\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0003\u0002<\b\u0002\u0001\u0003"+
		"\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0003\u0004Y\b\u0004\u0001\u0005\u0001\u0005"+
		"\u0005\u0005]\b\u0005\n\u0005\f\u0005`\t\u0005\u0001\u0005\u0001\u0005"+
		"\u0001\u0006\u0001\u0006\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007"+
		"\u0001\u0007\u0003\u0007k\b\u0007\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0003\b{\b\b\u0001\t\u0001\t\u0001\t\u0001\t\u0004\t\u0081\b\t\u000b"+
		"\t\f\t\u0082\u0001\t\u0003\t\u0086\b\t\u0001\t\u0001\t\u0001\n\u0001\n"+
		"\u0001\n\u0001\n\u0001\n\u0001\u000b\u0001\u000b\u0001\u000b\u0001\u000b"+
		"\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0003\f\u00a1\b\f\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0003\r\u00b3\b\r\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0003\u000f\u00bf\b\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0001\u000f\u0001\u000f\u0005\u000f\u00d0\b\u000f\n\u000f\f\u000f\u00d3"+
		"\t\u000f\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001"+
		"\u0010\u0001\u0010\u0003\u0010\u00dc\b\u0010\u0001\u0011\u0001\u0011\u0001"+
		"\u0011\u0005\u0011\u00e1\b\u0011\n\u0011\f\u0011\u00e4\t\u0011\u0001\u0012"+
		"\u0001\u0012\u0001\u0012\u0005\u0012\u00e9\b\u0012\n\u0012\f\u0012\u00ec"+
		"\t\u0012\u0001\u0013\u0001\u0013\u0003\u0013\u00f0\b\u0013\u0001\u0014"+
		"\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0014\u0003\u0014\u00f7\b\u0014"+
		"\u0001\u0014\u0000\u0001\u001e\u0015\u0000\u0002\u0004\u0006\b\n\f\u000e"+
		"\u0010\u0012\u0014\u0016\u0018\u001a\u001c\u001e \"$&(\u0000\u0007\u0001"+
		"\u0000\'(\u0001\u0000\u000e\u000f\u0001\u0000\u0010\u0012\u0001\u0000"+
		"\u0013\u0014\u0001\u0000\u0015\u0016\u0001\u0000\u0017\u001a\u0001\u0000"+
		"\u001b\u001c\u010e\u0000*\u0001\u0000\u0000\u0000\u0002-\u0001\u0000\u0000"+
		"\u0000\u0004;\u0001\u0000\u0000\u0000\u0006=\u0001\u0000\u0000\u0000\b"+
		"X\u0001\u0000\u0000\u0000\nZ\u0001\u0000\u0000\u0000\fc\u0001\u0000\u0000"+
		"\u0000\u000ee\u0001\u0000\u0000\u0000\u0010z\u0001\u0000\u0000\u0000\u0012"+
		"|\u0001\u0000\u0000\u0000\u0014\u0089\u0001\u0000\u0000\u0000\u0016\u008e"+
		"\u0001\u0000\u0000\u0000\u0018\u00a0\u0001\u0000\u0000\u0000\u001a\u00b2"+
		"\u0001\u0000\u0000\u0000\u001c\u00b4\u0001\u0000\u0000\u0000\u001e\u00be"+
		"\u0001\u0000\u0000\u0000 \u00db\u0001\u0000\u0000\u0000\"\u00dd\u0001"+
		"\u0000\u0000\u0000$\u00e5\u0001\u0000\u0000\u0000&\u00ef\u0001\u0000\u0000"+
		"\u0000(\u00f6\u0001\u0000\u0000\u0000*+\u0003\u0002\u0001\u0000+,\u0005"+
		"\u0000\u0000\u0001,\u0001\u0001\u0000\u0000\u0000-.\u0005\u001d\u0000"+
		"\u0000./\u0005\u001e\u0000\u0000/0\u0005\u0001\u0000\u000001\u0005\u0002"+
		"\u0000\u000012\u0003\n\u0005\u00002\u0003\u0001\u0000\u0000\u00003<\u0003"+
		"\u0018\f\u00004<\u0003\u001a\r\u00005<\u0003\u000e\u0007\u00006<\u0003"+
		"\u0010\b\u00007<\u0003\f\u0006\u00008<\u0003\b\u0004\u00009<\u0003\u0006"+
		"\u0003\u0000:<\u0003\u0012\t\u0000;3\u0001\u0000\u0000\u0000;4\u0001\u0000"+
		"\u0000\u0000;5\u0001\u0000\u0000\u0000;6\u0001\u0000\u0000\u0000;7\u0001"+
		"\u0000\u0000\u0000;8\u0001\u0000\u0000\u0000;9\u0001\u0000\u0000\u0000"+
		";:\u0001\u0000\u0000\u0000<\u0005\u0001\u0000\u0000\u0000=>\u0005*\u0000"+
		"\u0000>?\u0005\u0001\u0000\u0000?@\u0003$\u0012\u0000@A\u0005\u0002\u0000"+
		"\u0000A\u0007\u0001\u0000\u0000\u0000BC\u0005.\u0000\u0000CD\u0005\u0001"+
		"\u0000\u0000DE\u0003\u001e\u000f\u0000EF\u0005\u0002\u0000\u0000FY\u0001"+
		"\u0000\u0000\u0000GH\u0005-\u0000\u0000HI\u0005\u0001\u0000\u0000IY\u0005"+
		"\u0002\u0000\u0000JK\u0005,\u0000\u0000KL\u0005\u0001\u0000\u0000LM\u0003"+
		"\u001e\u000f\u0000MN\u0005\u0002\u0000\u0000NY\u0001\u0000\u0000\u0000"+
		"OP\u0005+\u0000\u0000PQ\u0005\u0001\u0000\u0000QR\u0003\u001e\u000f\u0000"+
		"RS\u0005\u0003\u0000\u0000ST\u0003\u001e\u000f\u0000TU\u0005\u0003\u0000"+
		"\u0000UV\u0003\u001e\u000f\u0000VW\u0005\u0002\u0000\u0000WY\u0001\u0000"+
		"\u0000\u0000XB\u0001\u0000\u0000\u0000XG\u0001\u0000\u0000\u0000XJ\u0001"+
		"\u0000\u0000\u0000XO\u0001\u0000\u0000\u0000Y\t\u0001\u0000\u0000\u0000"+
		"Z^\u0005\u0004\u0000\u0000[]\u0003\u0004\u0002\u0000\\[\u0001\u0000\u0000"+
		"\u0000]`\u0001\u0000\u0000\u0000^\\\u0001\u0000\u0000\u0000^_\u0001\u0000"+
		"\u0000\u0000_a\u0001\u0000\u0000\u0000`^\u0001\u0000\u0000\u0000ab\u0005"+
		"\u0005\u0000\u0000b\u000b\u0001\u0000\u0000\u0000cd\u0007\u0000\u0000"+
		"\u0000d\r\u0001\u0000\u0000\u0000ef\u0005!\u0000\u0000fg\u0003\u001e\u000f"+
		"\u0000gj\u0003\n\u0005\u0000hi\u0005\"\u0000\u0000ik\u0003\n\u0005\u0000"+
		"jh\u0001\u0000\u0000\u0000jk\u0001\u0000\u0000\u0000k\u000f\u0001\u0000"+
		"\u0000\u0000lm\u0005&\u0000\u0000mn\u0003\u0018\f\u0000no\u0005\u0006"+
		"\u0000\u0000op\u0003\u001e\u000f\u0000pq\u0005\u0006\u0000\u0000qr\u0003"+
		"\u001c\u000e\u0000rs\u0003\n\u0005\u0000s{\u0001\u0000\u0000\u0000tu\u0005"+
		"&\u0000\u0000uv\u0003\u001e\u000f\u0000vw\u0003\n\u0005\u0000w{\u0001"+
		"\u0000\u0000\u0000xy\u0005&\u0000\u0000y{\u0003\n\u0005\u0000zl\u0001"+
		"\u0000\u0000\u0000zt\u0001\u0000\u0000\u0000zx\u0001\u0000\u0000\u0000"+
		"{\u0011\u0001\u0000\u0000\u0000|}\u0005%\u0000\u0000}~\u0003\u001e\u000f"+
		"\u0000~\u0080\u0005\u0004\u0000\u0000\u007f\u0081\u0003\u0014\n\u0000"+
		"\u0080\u007f\u0001\u0000\u0000\u0000\u0081\u0082\u0001\u0000\u0000\u0000"+
		"\u0082\u0080\u0001\u0000\u0000\u0000\u0082\u0083\u0001\u0000\u0000\u0000"+
		"\u0083\u0085\u0001\u0000\u0000\u0000\u0084\u0086\u0003\u0016\u000b\u0000"+
		"\u0085\u0084\u0001\u0000\u0000\u0000\u0085\u0086\u0001\u0000\u0000\u0000"+
		"\u0086\u0087\u0001\u0000\u0000\u0000\u0087\u0088\u0005\u0005\u0000\u0000"+
		"\u0088\u0013\u0001\u0000\u0000\u0000\u0089\u008a\u0005$\u0000\u0000\u008a"+
		"\u008b\u0003$\u0012\u0000\u008b\u008c\u0005\u0007\u0000\u0000\u008c\u008d"+
		"\u0003\u0004\u0002\u0000\u008d\u0015\u0001\u0000\u0000\u0000\u008e\u008f"+
		"\u0005#\u0000\u0000\u008f\u0090\u0005\u0007\u0000\u0000\u0090\u0091\u0003"+
		"\u0004\u0002\u0000\u0091\u0017\u0001\u0000\u0000\u0000\u0092\u0093\u0003"+
		"&\u0013\u0000\u0093\u0094\u0003\"\u0011\u0000\u0094\u0095\u0003(\u0014"+
		"\u0000\u0095\u0096\u0005\b\u0000\u0000\u0096\u0097\u0003$\u0012\u0000"+
		"\u0097\u00a1\u0001\u0000\u0000\u0000\u0098\u0099\u0003&\u0013\u0000\u0099"+
		"\u009a\u0003\"\u0011\u0000\u009a\u009b\u0003(\u0014\u0000\u009b\u00a1"+
		"\u0001\u0000\u0000\u0000\u009c\u009d\u0003\"\u0011\u0000\u009d\u009e\u0005"+
		"\t\u0000\u0000\u009e\u009f\u0003$\u0012\u0000\u009f\u00a1\u0001\u0000"+
		"\u0000\u0000\u00a0\u0092\u0001\u0000\u0000\u0000\u00a0\u0098\u0001\u0000"+
		"\u0000\u0000\u00a0\u009c\u0001\u0000\u0000\u0000\u00a1\u0019\u0001\u0000"+
		"\u0000\u0000\u00a2\u00a3\u0005:\u0000\u0000\u00a3\u00a4\u0005\b\u0000"+
		"\u0000\u00a4\u00b3\u0003\u001e\u000f\u0000\u00a5\u00a6\u0005:\u0000\u0000"+
		"\u00a6\u00a7\u0005\n\u0000\u0000\u00a7\u00b3\u0003\u001e\u000f\u0000\u00a8"+
		"\u00a9\u0005:\u0000\u0000\u00a9\u00aa\u0005\u000b\u0000\u0000\u00aa\u00b3"+
		"\u0003\u001e\u000f\u0000\u00ab\u00ac\u0005:\u0000\u0000\u00ac\u00ad\u0005"+
		"\f\u0000\u0000\u00ad\u00b3\u0003\u001e\u000f\u0000\u00ae\u00af\u0005:"+
		"\u0000\u0000\u00af\u00b0\u0005\r\u0000\u0000\u00b0\u00b3\u0003\u001e\u000f"+
		"\u0000\u00b1\u00b3\u0003\u001c\u000e\u0000\u00b2\u00a2\u0001\u0000\u0000"+
		"\u0000\u00b2\u00a5\u0001\u0000\u0000\u0000\u00b2\u00a8\u0001\u0000\u0000"+
		"\u0000\u00b2\u00ab\u0001\u0000\u0000\u0000\u00b2\u00ae\u0001\u0000\u0000"+
		"\u0000\u00b2\u00b1\u0001\u0000\u0000\u0000\u00b3\u001b\u0001\u0000\u0000"+
		"\u0000\u00b4\u00b5\u0005:\u0000\u0000\u00b5\u00b6\u0007\u0001\u0000\u0000"+
		"\u00b6\u001d\u0001\u0000\u0000\u0000\u00b7\u00b8\u0006\u000f\uffff\uffff"+
		"\u0000\u00b8\u00b9\u0005\u0001\u0000\u0000\u00b9\u00ba\u0003\u001e\u000f"+
		"\u0000\u00ba\u00bb\u0005\u0002\u0000\u0000\u00bb\u00bf\u0001\u0000\u0000"+
		"\u0000\u00bc\u00bf\u0003 \u0010\u0000\u00bd\u00bf\u0003\b\u0004\u0000"+
		"\u00be\u00b7\u0001\u0000\u0000\u0000\u00be\u00bc\u0001\u0000\u0000\u0000"+
		"\u00be\u00bd\u0001\u0000\u0000\u0000\u00bf\u00d1\u0001\u0000\u0000\u0000"+
		"\u00c0\u00c1\n\b\u0000\u0000\u00c1\u00c2\u0007\u0002\u0000\u0000\u00c2"+
		"\u00d0\u0003\u001e\u000f\t\u00c3\u00c4\n\u0007\u0000\u0000\u00c4\u00c5"+
		"\u0007\u0003\u0000\u0000\u00c5\u00d0\u0003\u001e\u000f\b\u00c6\u00c7\n"+
		"\u0006\u0000\u0000\u00c7\u00c8\u0007\u0004\u0000\u0000\u00c8\u00d0\u0003"+
		"\u001e\u000f\u0007\u00c9\u00ca\n\u0005\u0000\u0000\u00ca\u00cb\u0007\u0005"+
		"\u0000\u0000\u00cb\u00d0\u0003\u001e\u000f\u0006\u00cc\u00cd\n\u0004\u0000"+
		"\u0000\u00cd\u00ce\u0007\u0006\u0000\u0000\u00ce\u00d0\u0003\u001e\u000f"+
		"\u0005\u00cf\u00c0\u0001\u0000\u0000\u0000\u00cf\u00c3\u0001\u0000\u0000"+
		"\u0000\u00cf\u00c6\u0001\u0000\u0000\u0000\u00cf\u00c9\u0001\u0000\u0000"+
		"\u0000\u00cf\u00cc\u0001\u0000\u0000\u0000\u00d0\u00d3\u0001\u0000\u0000"+
		"\u0000\u00d1\u00cf\u0001\u0000\u0000\u0000\u00d1\u00d2\u0001\u0000\u0000"+
		"\u0000\u00d2\u001f\u0001\u0000\u0000\u0000\u00d3\u00d1\u0001\u0000\u0000"+
		"\u0000\u00d4\u00dc\u00054\u0000\u0000\u00d5\u00dc\u00055\u0000\u0000\u00d6"+
		"\u00dc\u0005:\u0000\u0000\u00d7\u00dc\u00057\u0000\u0000\u00d8\u00dc\u0005"+
		"8\u0000\u0000\u00d9\u00dc\u00059\u0000\u0000\u00da\u00dc\u00056\u0000"+
		"\u0000\u00db\u00d4\u0001\u0000\u0000\u0000\u00db\u00d5\u0001\u0000\u0000"+
		"\u0000\u00db\u00d6\u0001\u0000\u0000\u0000\u00db\u00d7\u0001\u0000\u0000"+
		"\u0000\u00db\u00d8\u0001\u0000\u0000\u0000\u00db\u00d9\u0001\u0000\u0000"+
		"\u0000\u00db\u00da\u0001\u0000\u0000\u0000\u00dc!\u0001\u0000\u0000\u0000"+
		"\u00dd\u00e2\u0005:\u0000\u0000\u00de\u00df\u0005\u0003\u0000\u0000\u00df"+
		"\u00e1\u0005:\u0000\u0000\u00e0\u00de\u0001\u0000\u0000\u0000\u00e1\u00e4"+
		"\u0001\u0000\u0000\u0000\u00e2\u00e0\u0001\u0000\u0000\u0000\u00e2\u00e3"+
		"\u0001\u0000\u0000\u0000\u00e3#\u0001\u0000\u0000\u0000\u00e4\u00e2\u0001"+
		"\u0000\u0000\u0000\u00e5\u00ea\u0003\u001e\u000f\u0000\u00e6\u00e7\u0005"+
		"\u0003\u0000\u0000\u00e7\u00e9\u0003\u001e\u000f\u0000\u00e8\u00e6\u0001"+
		"\u0000\u0000\u0000\u00e9\u00ec\u0001\u0000\u0000\u0000\u00ea\u00e8\u0001"+
		"\u0000\u0000\u0000\u00ea\u00eb\u0001\u0000\u0000\u0000\u00eb%\u0001\u0000"+
		"\u0000\u0000\u00ec\u00ea\u0001\u0000\u0000\u0000\u00ed\u00f0\u0005\u001f"+
		"\u0000\u0000\u00ee\u00f0\u0005 \u0000\u0000\u00ef\u00ed\u0001\u0000\u0000"+
		"\u0000\u00ef\u00ee\u0001\u0000\u0000\u0000\u00f0\'\u0001\u0000\u0000\u0000"+
		"\u00f1\u00f7\u0005/\u0000\u0000\u00f2\u00f7\u00050\u0000\u0000\u00f3\u00f7"+
		"\u00051\u0000\u0000\u00f4\u00f7\u00052\u0000\u0000\u00f5\u00f7\u00053"+
		"\u0000\u0000\u00f6\u00f1\u0001\u0000\u0000\u0000\u00f6\u00f2\u0001\u0000"+
		"\u0000\u0000\u00f6\u00f3\u0001\u0000\u0000\u0000\u00f6\u00f4\u0001\u0000"+
		"\u0000\u0000\u00f6\u00f5\u0001\u0000\u0000\u0000\u00f7)\u0001\u0000\u0000"+
		"\u0000\u0011;X^jz\u0082\u0085\u00a0\u00b2\u00be\u00cf\u00d1\u00db\u00e2"+
		"\u00ea\u00ef\u00f6";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}