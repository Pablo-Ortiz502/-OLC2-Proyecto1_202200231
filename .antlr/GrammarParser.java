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
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, FUNC=31, MAIN=32, 
		PVAR=33, PCONST=34, IF=35, ELSE=36, DEFAULT=37, CASE=38, SWITCH=39, FOR=40, 
		BREAK=41, CONTINUE=42, RETURN=43, PRINT=44, SUBSTR=45, LEN=46, NOW=47, 
		TYPEOF=48, PINT=49, PFLOAT=50, PBOOL=51, PSTRING=52, PRUNE=53, NUM=54, 
		FLOAT=55, NIL=56, BOOLE=57, STRING=58, RUNE=59, ID=60, LINE_COMMENT=61, 
		BLOCK_COMMENT=62, WS=63;
	public static final int
		RULE_s = 0, RULE_program = 1, RULE_stmts = 2, RULE_pri = 3, RULE_reserved = 4, 
		RULE_block = 5, RULE_inst = 6, RULE_ifStmt = 7, RULE_forStmt = 8, RULE_switchStmt = 9, 
		RULE_caseClause = 10, RULE_defaultClause = 11, RULE_dec = 12, RULE_arraydec = 13, 
		RULE_larrayexp = 14, RULE_larray = 15, RULE_arrayValue = 16, RULE_arrayElements = 17, 
		RULE_arrayElement = 18, RULE_asg = 19, RULE_incdec = 20, RULE_expr = 21, 
		RULE_vals = 22, RULE_lid = 23, RULE_lval = 24, RULE_pre = 25, RULE_type = 26;
	private static String[] makeRuleNames() {
		return new String[] {
			"s", "program", "stmts", "pri", "reserved", "block", "inst", "ifStmt", 
			"forStmt", "switchStmt", "caseClause", "defaultClause", "dec", "arraydec", 
			"larrayexp", "larray", "arrayValue", "arrayElements", "arrayElement", 
			"asg", "incdec", "expr", "vals", "lid", "lval", "pre", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "','", "'{'", "'}'", "';'", "':'", "'='", "':='", 
			"'['", "']'", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", "'*'", 
			"'/'", "'%'", "'+'", "'-'", "'=='", "'!='", "'>='", "'<='", "'>'", "'<'", 
			"'&&'", "'||'", "'func'", "'main'", "'var'", "'const'", "'if'", "'else'", 
			"'default'", "'case'", "'switch'", "'for'", "'break'", "'continue'", 
			"'return'", "'fmt.Println'", "'substr'", "'len'", "'now'", "'typeOf'", 
			"'int32'", "'float32'", "'boole'", "'string'", "'rune'", null, null, 
			"'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, "FUNC", "MAIN", "PVAR", "PCONST", 
			"IF", "ELSE", "DEFAULT", "CASE", "SWITCH", "FOR", "BREAK", "CONTINUE", 
			"RETURN", "PRINT", "SUBSTR", "LEN", "NOW", "TYPEOF", "PINT", "PFLOAT", 
			"PBOOL", "PSTRING", "PRUNE", "NUM", "FLOAT", "NIL", "BOOLE", "STRING", 
			"RUNE", "ID", "LINE_COMMENT", "BLOCK_COMMENT", "WS"
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
			setState(54);
			program();
			setState(55);
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
			setState(57);
			match(FUNC);
			setState(58);
			match(MAIN);
			setState(59);
			match(T__0);
			setState(60);
			match(T__1);
			setState(61);
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
		public ArraydecContext arraydec() {
			return getRuleContext(ArraydecContext.class,0);
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
			setState(72);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,0,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(63);
				dec();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(64);
				asg();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(65);
				ifStmt();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(66);
				forStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(67);
				inst();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(68);
				reserved();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(69);
				pri();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(70);
				switchStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(71);
				arraydec();
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
			setState(74);
			match(PRINT);
			setState(75);
			match(T__0);
			setState(76);
			lval();
			setState(77);
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
			setState(101);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case TYPEOF:
				_localctx = new TypeOContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(79);
				match(TYPEOF);
				setState(80);
				match(T__0);
				setState(81);
				expr(0);
				setState(82);
				match(T__1);
				}
				break;
			case NOW:
				_localctx = new NowFuncContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(84);
				match(NOW);
				setState(85);
				match(T__0);
				setState(86);
				match(T__1);
				}
				break;
			case LEN:
				_localctx = new LenFuncContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(87);
				match(LEN);
				setState(88);
				match(T__0);
				setState(89);
				expr(0);
				setState(90);
				match(T__1);
				}
				break;
			case SUBSTR:
				_localctx = new SubSContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(92);
				match(SUBSTR);
				setState(93);
				match(T__0);
				setState(94);
				expr(0);
				setState(95);
				match(T__2);
				setState(96);
				expr(0);
				setState(97);
				match(T__2);
				setState(98);
				expr(0);
				setState(99);
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
			setState(103);
			match(T__3);
			setState(107);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 1153475168840974336L) != 0)) {
				{
				{
				setState(104);
				stmts();
				}
				}
				setState(109);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(110);
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
			setState(112);
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
			setState(114);
			match(IF);
			setState(115);
			expr(0);
			setState(116);
			block();
			setState(119);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(117);
				match(ELSE);
				setState(118);
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
			setState(135);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,4,_ctx) ) {
			case 1:
				_localctx = new LongForContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(121);
				match(FOR);
				setState(122);
				dec();
				setState(123);
				match(T__5);
				setState(124);
				expr(0);
				setState(125);
				match(T__5);
				setState(126);
				incdec();
				setState(127);
				block();
				}
				break;
			case 2:
				_localctx = new MidForContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(129);
				match(FOR);
				setState(130);
				expr(0);
				setState(131);
				block();
				}
				break;
			case 3:
				_localctx = new ShortForContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(133);
				match(FOR);
				setState(134);
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
			setState(137);
			match(SWITCH);
			setState(138);
			expr(0);
			setState(139);
			match(T__3);
			setState(141); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(140);
				caseClause();
				}
				}
				setState(143); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==CASE );
			setState(146);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(145);
				defaultClause();
				}
			}

			setState(148);
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
			setState(150);
			match(CASE);
			setState(151);
			lval();
			setState(152);
			match(T__6);
			setState(153);
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
			setState(155);
			match(DEFAULT);
			setState(156);
			match(T__6);
			setState(157);
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
			setState(173);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,7,_ctx) ) {
			case 1:
				_localctx = new DeclvContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(159);
				pre();
				setState(160);
				lid();
				setState(161);
				type();
				setState(162);
				match(T__7);
				setState(163);
				lval();
				}
				break;
			case 2:
				_localctx = new DeclContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(165);
				pre();
				setState(166);
				lid();
				setState(167);
				type();
				}
				break;
			case 3:
				_localctx = new SdecContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(169);
				lid();
				setState(170);
				match(T__8);
				setState(171);
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
	public static class ArraydecContext extends ParserRuleContext {
		public ArraydecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arraydec; }
	 
		public ArraydecContext() { }
		public void copyFrom(ArraydecContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ShortArrayDecContext extends ArraydecContext {
		public TerminalNode PVAR() { return getToken(GrammarParser.PVAR, 0); }
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public LarrayContext larray() {
			return getRuleContext(LarrayContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ShortArrayDecContext(ArraydecContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class LongArrayDecContext extends ArraydecContext {
		public TerminalNode PVAR() { return getToken(GrammarParser.PVAR, 0); }
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public List<LarrayContext> larray() {
			return getRuleContexts(LarrayContext.class);
		}
		public LarrayContext larray(int i) {
			return getRuleContext(LarrayContext.class,i);
		}
		public List<TypeContext> type() {
			return getRuleContexts(TypeContext.class);
		}
		public TypeContext type(int i) {
			return getRuleContext(TypeContext.class,i);
		}
		public ArrayValueContext arrayValue() {
			return getRuleContext(ArrayValueContext.class,0);
		}
		public LongArrayDecContext(ArraydecContext ctx) { copyFrom(ctx); }
	}

	public final ArraydecContext arraydec() throws RecognitionException {
		ArraydecContext _localctx = new ArraydecContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_arraydec);
		try {
			setState(189);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,8,_ctx) ) {
			case 1:
				_localctx = new LongArrayDecContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(175);
				match(PVAR);
				setState(176);
				match(ID);
				setState(177);
				larray();
				setState(178);
				type();
				setState(179);
				match(T__7);
				setState(180);
				larray();
				setState(181);
				type();
				setState(182);
				arrayValue();
				}
				break;
			case 2:
				_localctx = new ShortArrayDecContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(184);
				match(PVAR);
				setState(185);
				match(ID);
				setState(186);
				larray();
				setState(187);
				type();
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
	public static class LarrayexpContext extends ParserRuleContext {
		public List<ExprContext> expr() {
			return getRuleContexts(ExprContext.class);
		}
		public ExprContext expr(int i) {
			return getRuleContext(ExprContext.class,i);
		}
		public LarrayexpContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_larrayexp; }
	}

	public final LarrayexpContext larrayexp() throws RecognitionException {
		LarrayexpContext _localctx = new LarrayexpContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_larrayexp);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(191);
			match(T__9);
			setState(192);
			expr(0);
			setState(193);
			match(T__10);
			setState(200);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,9,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(194);
					match(T__9);
					setState(195);
					expr(0);
					setState(196);
					match(T__10);
					}
					} 
				}
				setState(202);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,9,_ctx);
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
	public static class LarrayContext extends ParserRuleContext {
		public List<TerminalNode> NUM() { return getTokens(GrammarParser.NUM); }
		public TerminalNode NUM(int i) {
			return getToken(GrammarParser.NUM, i);
		}
		public LarrayContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_larray; }
	}

	public final LarrayContext larray() throws RecognitionException {
		LarrayContext _localctx = new LarrayContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_larray);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(203);
			match(T__9);
			setState(204);
			match(NUM);
			setState(205);
			match(T__10);
			setState(211);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__9) {
				{
				{
				setState(206);
				match(T__9);
				setState(207);
				match(NUM);
				setState(208);
				match(T__10);
				}
				}
				setState(213);
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
	public static class ArrayValueContext extends ParserRuleContext {
		public ArrayElementsContext arrayElements() {
			return getRuleContext(ArrayElementsContext.class,0);
		}
		public ArrayValueContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayValue; }
	}

	public final ArrayValueContext arrayValue() throws RecognitionException {
		ArrayValueContext _localctx = new ArrayValueContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_arrayValue);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(214);
			match(T__3);
			setState(216);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 2288356376285544466L) != 0)) {
				{
				setState(215);
				arrayElements();
				}
			}

			setState(218);
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
	public static class ArrayElementsContext extends ParserRuleContext {
		public List<ArrayElementContext> arrayElement() {
			return getRuleContexts(ArrayElementContext.class);
		}
		public ArrayElementContext arrayElement(int i) {
			return getRuleContext(ArrayElementContext.class,i);
		}
		public ArrayElementsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayElements; }
	}

	public final ArrayElementsContext arrayElements() throws RecognitionException {
		ArrayElementsContext _localctx = new ArrayElementsContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_arrayElements);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(220);
			arrayElement();
			setState(225);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(221);
				match(T__2);
				setState(222);
				arrayElement();
				}
				}
				setState(227);
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
	public static class ArrayElementContext extends ParserRuleContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ArrayValueContext arrayValue() {
			return getRuleContext(ArrayValueContext.class,0);
		}
		public ArrayElementContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayElement; }
	}

	public final ArrayElementContext arrayElement() throws RecognitionException {
		ArrayElementContext _localctx = new ArrayElementContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_arrayElement);
		try {
			setState(230);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
			case SUBSTR:
			case LEN:
			case NOW:
			case TYPEOF:
			case NUM:
			case FLOAT:
			case NIL:
			case BOOLE:
			case STRING:
			case RUNE:
			case ID:
				enterOuterAlt(_localctx, 1);
				{
				setState(228);
				expr(0);
				}
				break;
			case T__3:
				enterOuterAlt(_localctx, 2);
				{
				setState(229);
				arrayValue();
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
	public static class ArrayAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public LarrayexpContext larrayexp() {
			return getRuleContext(LarrayexpContext.class,0);
		}
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ArrayAsigContext(AsgContext ctx) { copyFrom(ctx); }
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
		enterRule(_localctx, 38, RULE_asg);
		try {
			setState(253);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,14,_ctx) ) {
			case 1:
				_localctx = new ArrayAsigContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(232);
				match(ID);
				setState(233);
				larrayexp();
				setState(234);
				match(T__7);
				setState(235);
				expr(0);
				}
				break;
			case 2:
				_localctx = new AsigContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(237);
				match(ID);
				setState(238);
				match(T__7);
				setState(239);
				expr(0);
				}
				break;
			case 3:
				_localctx = new PlusAsigContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(240);
				match(ID);
				setState(241);
				match(T__11);
				setState(242);
				expr(0);
				}
				break;
			case 4:
				_localctx = new MinusAsigContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(243);
				match(ID);
				setState(244);
				match(T__12);
				setState(245);
				expr(0);
				}
				break;
			case 5:
				_localctx = new MultAsigContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(246);
				match(ID);
				setState(247);
				match(T__13);
				setState(248);
				expr(0);
				}
				break;
			case 6:
				_localctx = new DivAsigContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(249);
				match(ID);
				setState(250);
				match(T__14);
				setState(251);
				expr(0);
				}
				break;
			case 7:
				_localctx = new IndeContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(252);
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
		enterRule(_localctx, 40, RULE_incdec);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(255);
			match(ID);
			setState(256);
			((IncdecContext)_localctx).op = _input.LT(1);
			_la = _input.LA(1);
			if ( !(_la==T__15 || _la==T__16) ) {
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
		int _startState = 42;
		enterRecursionRule(_localctx, 42, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(265);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
				{
				_localctx = new ParensContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(259);
				match(T__0);
				setState(260);
				expr(0);
				setState(261);
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
				setState(263);
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
				setState(264);
				reserved();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			_ctx.stop = _input.LT(-1);
			setState(284);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,17,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(282);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,16,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivModContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(267);
						if (!(precpred(_ctx, 8))) throw new FailedPredicateException(this, "precpred(_ctx, 8)");
						setState(268);
						((MulDivModContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 1835008L) != 0)) ) {
							((MulDivModContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(269);
						expr(9);
						}
						break;
					case 2:
						{
						_localctx = new AddSubContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(270);
						if (!(precpred(_ctx, 7))) throw new FailedPredicateException(this, "precpred(_ctx, 7)");
						setState(271);
						((AddSubContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__20 || _la==T__21) ) {
							((AddSubContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(272);
						expr(8);
						}
						break;
					case 3:
						{
						_localctx = new EqNotEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(273);
						if (!(precpred(_ctx, 6))) throw new FailedPredicateException(this, "precpred(_ctx, 6)");
						setState(274);
						((EqNotEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__22 || _la==T__23) ) {
							((EqNotEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(275);
						expr(7);
						}
						break;
					case 4:
						{
						_localctx = new MoreLessEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(276);
						if (!(precpred(_ctx, 5))) throw new FailedPredicateException(this, "precpred(_ctx, 5)");
						setState(277);
						((MoreLessEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 503316480L) != 0)) ) {
							((MoreLessEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(278);
						expr(6);
						}
						break;
					case 5:
						{
						_localctx = new AndOrContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(279);
						if (!(precpred(_ctx, 4))) throw new FailedPredicateException(this, "precpred(_ctx, 4)");
						setState(280);
						((AndOrContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__28 || _la==T__29) ) {
							((AndOrContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(281);
						expr(5);
						}
						break;
					}
					} 
				}
				setState(286);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,17,_ctx);
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
	public static class ArrayValContext extends ValsContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public LarrayexpContext larrayexp() {
			return getRuleContext(LarrayexpContext.class,0);
		}
		public ArrayValContext(ValsContext ctx) { copyFrom(ctx); }
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
		enterRule(_localctx, 44, RULE_vals);
		try {
			setState(296);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,18,_ctx) ) {
			case 1:
				_localctx = new NumContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(287);
				match(NUM);
				}
				break;
			case 2:
				_localctx = new FloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(288);
				match(FLOAT);
				}
				break;
			case 3:
				_localctx = new ArrayValContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(289);
				match(ID);
				setState(290);
				larrayexp();
				}
				break;
			case 4:
				_localctx = new IdExprContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(291);
				match(ID);
				}
				break;
			case 5:
				_localctx = new BooleContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(292);
				match(BOOLE);
				}
				break;
			case 6:
				_localctx = new StringContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(293);
				match(STRING);
				}
				break;
			case 7:
				_localctx = new RuneContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(294);
				match(RUNE);
				}
				break;
			case 8:
				_localctx = new NilContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(295);
				match(NIL);
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
		enterRule(_localctx, 46, RULE_lid);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(298);
			match(ID);
			setState(303);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(299);
				match(T__2);
				setState(300);
				match(ID);
				}
				}
				setState(305);
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
		enterRule(_localctx, 48, RULE_lval);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(306);
			expr(0);
			setState(311);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(307);
				match(T__2);
				setState(308);
				expr(0);
				}
				}
				setState(313);
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
		enterRule(_localctx, 50, RULE_pre);
		try {
			setState(316);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PVAR:
				_localctx = new VarContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(314);
				match(PVAR);
				}
				break;
			case PCONST:
				_localctx = new ConstContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(315);
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
		enterRule(_localctx, 52, RULE_type);
		try {
			setState(323);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PINT:
				_localctx = new PintContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(318);
				match(PINT);
				}
				break;
			case PFLOAT:
				_localctx = new PfloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(319);
				match(PFLOAT);
				}
				break;
			case PBOOL:
				_localctx = new PbooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(320);
				match(PBOOL);
				}
				break;
			case PSTRING:
				_localctx = new PstringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(321);
				match(PSTRING);
				}
				break;
			case PRUNE:
				_localctx = new PruneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(322);
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
		case 21:
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
		"\u0004\u0001?\u0146\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0001\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0003\u0002I\b\u0002"+
		"\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0001\u0004\u0001\u0004\u0001\u0004\u0003\u0004f\b\u0004\u0001\u0005"+
		"\u0001\u0005\u0005\u0005j\b\u0005\n\u0005\f\u0005m\t\u0005\u0001\u0005"+
		"\u0001\u0005\u0001\u0006\u0001\u0006\u0001\u0007\u0001\u0007\u0001\u0007"+
		"\u0001\u0007\u0001\u0007\u0003\u0007x\b\u0007\u0001\b\u0001\b\u0001\b"+
		"\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0003\b\u0088\b\b\u0001\t\u0001\t\u0001\t\u0001\t\u0004"+
		"\t\u008e\b\t\u000b\t\f\t\u008f\u0001\t\u0003\t\u0093\b\t\u0001\t\u0001"+
		"\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001"+
		"\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0003\f\u00ae"+
		"\b\f\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0003\r\u00be\b\r\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e"+
		"\u0005\u000e\u00c7\b\u000e\n\u000e\f\u000e\u00ca\t\u000e\u0001\u000f\u0001"+
		"\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0005\u000f\u00d2"+
		"\b\u000f\n\u000f\f\u000f\u00d5\t\u000f\u0001\u0010\u0001\u0010\u0003\u0010"+
		"\u00d9\b\u0010\u0001\u0010\u0001\u0010\u0001\u0011\u0001\u0011\u0001\u0011"+
		"\u0005\u0011\u00e0\b\u0011\n\u0011\f\u0011\u00e3\t\u0011\u0001\u0012\u0001"+
		"\u0012\u0003\u0012\u00e7\b\u0012\u0001\u0013\u0001\u0013\u0001\u0013\u0001"+
		"\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001"+
		"\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001"+
		"\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0003"+
		"\u0013\u00fe\b\u0013\u0001\u0014\u0001\u0014\u0001\u0014\u0001\u0015\u0001"+
		"\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0003"+
		"\u0015\u010a\b\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001"+
		"\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001"+
		"\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0005\u0015\u011b"+
		"\b\u0015\n\u0015\f\u0015\u011e\t\u0015\u0001\u0016\u0001\u0016\u0001\u0016"+
		"\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0001\u0016"+
		"\u0003\u0016\u0129\b\u0016\u0001\u0017\u0001\u0017\u0001\u0017\u0005\u0017"+
		"\u012e\b\u0017\n\u0017\f\u0017\u0131\t\u0017\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0005\u0018\u0136\b\u0018\n\u0018\f\u0018\u0139\t\u0018\u0001\u0019"+
		"\u0001\u0019\u0003\u0019\u013d\b\u0019\u0001\u001a\u0001\u001a\u0001\u001a"+
		"\u0001\u001a\u0001\u001a\u0003\u001a\u0144\b\u001a\u0001\u001a\u0000\u0001"+
		"*\u001b\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018"+
		"\u001a\u001c\u001e \"$&(*,.024\u0000\u0007\u0001\u0000)*\u0001\u0000\u0010"+
		"\u0011\u0001\u0000\u0012\u0014\u0001\u0000\u0015\u0016\u0001\u0000\u0017"+
		"\u0018\u0001\u0000\u0019\u001c\u0001\u0000\u001d\u001e\u015e\u00006\u0001"+
		"\u0000\u0000\u0000\u00029\u0001\u0000\u0000\u0000\u0004H\u0001\u0000\u0000"+
		"\u0000\u0006J\u0001\u0000\u0000\u0000\be\u0001\u0000\u0000\u0000\ng\u0001"+
		"\u0000\u0000\u0000\fp\u0001\u0000\u0000\u0000\u000er\u0001\u0000\u0000"+
		"\u0000\u0010\u0087\u0001\u0000\u0000\u0000\u0012\u0089\u0001\u0000\u0000"+
		"\u0000\u0014\u0096\u0001\u0000\u0000\u0000\u0016\u009b\u0001\u0000\u0000"+
		"\u0000\u0018\u00ad\u0001\u0000\u0000\u0000\u001a\u00bd\u0001\u0000\u0000"+
		"\u0000\u001c\u00bf\u0001\u0000\u0000\u0000\u001e\u00cb\u0001\u0000\u0000"+
		"\u0000 \u00d6\u0001\u0000\u0000\u0000\"\u00dc\u0001\u0000\u0000\u0000"+
		"$\u00e6\u0001\u0000\u0000\u0000&\u00fd\u0001\u0000\u0000\u0000(\u00ff"+
		"\u0001\u0000\u0000\u0000*\u0109\u0001\u0000\u0000\u0000,\u0128\u0001\u0000"+
		"\u0000\u0000.\u012a\u0001\u0000\u0000\u00000\u0132\u0001\u0000\u0000\u0000"+
		"2\u013c\u0001\u0000\u0000\u00004\u0143\u0001\u0000\u0000\u000067\u0003"+
		"\u0002\u0001\u000078\u0005\u0000\u0000\u00018\u0001\u0001\u0000\u0000"+
		"\u00009:\u0005\u001f\u0000\u0000:;\u0005 \u0000\u0000;<\u0005\u0001\u0000"+
		"\u0000<=\u0005\u0002\u0000\u0000=>\u0003\n\u0005\u0000>\u0003\u0001\u0000"+
		"\u0000\u0000?I\u0003\u0018\f\u0000@I\u0003&\u0013\u0000AI\u0003\u000e"+
		"\u0007\u0000BI\u0003\u0010\b\u0000CI\u0003\f\u0006\u0000DI\u0003\b\u0004"+
		"\u0000EI\u0003\u0006\u0003\u0000FI\u0003\u0012\t\u0000GI\u0003\u001a\r"+
		"\u0000H?\u0001\u0000\u0000\u0000H@\u0001\u0000\u0000\u0000HA\u0001\u0000"+
		"\u0000\u0000HB\u0001\u0000\u0000\u0000HC\u0001\u0000\u0000\u0000HD\u0001"+
		"\u0000\u0000\u0000HE\u0001\u0000\u0000\u0000HF\u0001\u0000\u0000\u0000"+
		"HG\u0001\u0000\u0000\u0000I\u0005\u0001\u0000\u0000\u0000JK\u0005,\u0000"+
		"\u0000KL\u0005\u0001\u0000\u0000LM\u00030\u0018\u0000MN\u0005\u0002\u0000"+
		"\u0000N\u0007\u0001\u0000\u0000\u0000OP\u00050\u0000\u0000PQ\u0005\u0001"+
		"\u0000\u0000QR\u0003*\u0015\u0000RS\u0005\u0002\u0000\u0000Sf\u0001\u0000"+
		"\u0000\u0000TU\u0005/\u0000\u0000UV\u0005\u0001\u0000\u0000Vf\u0005\u0002"+
		"\u0000\u0000WX\u0005.\u0000\u0000XY\u0005\u0001\u0000\u0000YZ\u0003*\u0015"+
		"\u0000Z[\u0005\u0002\u0000\u0000[f\u0001\u0000\u0000\u0000\\]\u0005-\u0000"+
		"\u0000]^\u0005\u0001\u0000\u0000^_\u0003*\u0015\u0000_`\u0005\u0003\u0000"+
		"\u0000`a\u0003*\u0015\u0000ab\u0005\u0003\u0000\u0000bc\u0003*\u0015\u0000"+
		"cd\u0005\u0002\u0000\u0000df\u0001\u0000\u0000\u0000eO\u0001\u0000\u0000"+
		"\u0000eT\u0001\u0000\u0000\u0000eW\u0001\u0000\u0000\u0000e\\\u0001\u0000"+
		"\u0000\u0000f\t\u0001\u0000\u0000\u0000gk\u0005\u0004\u0000\u0000hj\u0003"+
		"\u0004\u0002\u0000ih\u0001\u0000\u0000\u0000jm\u0001\u0000\u0000\u0000"+
		"ki\u0001\u0000\u0000\u0000kl\u0001\u0000\u0000\u0000ln\u0001\u0000\u0000"+
		"\u0000mk\u0001\u0000\u0000\u0000no\u0005\u0005\u0000\u0000o\u000b\u0001"+
		"\u0000\u0000\u0000pq\u0007\u0000\u0000\u0000q\r\u0001\u0000\u0000\u0000"+
		"rs\u0005#\u0000\u0000st\u0003*\u0015\u0000tw\u0003\n\u0005\u0000uv\u0005"+
		"$\u0000\u0000vx\u0003\n\u0005\u0000wu\u0001\u0000\u0000\u0000wx\u0001"+
		"\u0000\u0000\u0000x\u000f\u0001\u0000\u0000\u0000yz\u0005(\u0000\u0000"+
		"z{\u0003\u0018\f\u0000{|\u0005\u0006\u0000\u0000|}\u0003*\u0015\u0000"+
		"}~\u0005\u0006\u0000\u0000~\u007f\u0003(\u0014\u0000\u007f\u0080\u0003"+
		"\n\u0005\u0000\u0080\u0088\u0001\u0000\u0000\u0000\u0081\u0082\u0005("+
		"\u0000\u0000\u0082\u0083\u0003*\u0015\u0000\u0083\u0084\u0003\n\u0005"+
		"\u0000\u0084\u0088\u0001\u0000\u0000\u0000\u0085\u0086\u0005(\u0000\u0000"+
		"\u0086\u0088\u0003\n\u0005\u0000\u0087y\u0001\u0000\u0000\u0000\u0087"+
		"\u0081\u0001\u0000\u0000\u0000\u0087\u0085\u0001\u0000\u0000\u0000\u0088"+
		"\u0011\u0001\u0000\u0000\u0000\u0089\u008a\u0005\'\u0000\u0000\u008a\u008b"+
		"\u0003*\u0015\u0000\u008b\u008d\u0005\u0004\u0000\u0000\u008c\u008e\u0003"+
		"\u0014\n\u0000\u008d\u008c\u0001\u0000\u0000\u0000\u008e\u008f\u0001\u0000"+
		"\u0000\u0000\u008f\u008d\u0001\u0000\u0000\u0000\u008f\u0090\u0001\u0000"+
		"\u0000\u0000\u0090\u0092\u0001\u0000\u0000\u0000\u0091\u0093\u0003\u0016"+
		"\u000b\u0000\u0092\u0091\u0001\u0000\u0000\u0000\u0092\u0093\u0001\u0000"+
		"\u0000\u0000\u0093\u0094\u0001\u0000\u0000\u0000\u0094\u0095\u0005\u0005"+
		"\u0000\u0000\u0095\u0013\u0001\u0000\u0000\u0000\u0096\u0097\u0005&\u0000"+
		"\u0000\u0097\u0098\u00030\u0018\u0000\u0098\u0099\u0005\u0007\u0000\u0000"+
		"\u0099\u009a\u0003\u0004\u0002\u0000\u009a\u0015\u0001\u0000\u0000\u0000"+
		"\u009b\u009c\u0005%\u0000\u0000\u009c\u009d\u0005\u0007\u0000\u0000\u009d"+
		"\u009e\u0003\u0004\u0002\u0000\u009e\u0017\u0001\u0000\u0000\u0000\u009f"+
		"\u00a0\u00032\u0019\u0000\u00a0\u00a1\u0003.\u0017\u0000\u00a1\u00a2\u0003"+
		"4\u001a\u0000\u00a2\u00a3\u0005\b\u0000\u0000\u00a3\u00a4\u00030\u0018"+
		"\u0000\u00a4\u00ae\u0001\u0000\u0000\u0000\u00a5\u00a6\u00032\u0019\u0000"+
		"\u00a6\u00a7\u0003.\u0017\u0000\u00a7\u00a8\u00034\u001a\u0000\u00a8\u00ae"+
		"\u0001\u0000\u0000\u0000\u00a9\u00aa\u0003.\u0017\u0000\u00aa\u00ab\u0005"+
		"\t\u0000\u0000\u00ab\u00ac\u00030\u0018\u0000\u00ac\u00ae\u0001\u0000"+
		"\u0000\u0000\u00ad\u009f\u0001\u0000\u0000\u0000\u00ad\u00a5\u0001\u0000"+
		"\u0000\u0000\u00ad\u00a9\u0001\u0000\u0000\u0000\u00ae\u0019\u0001\u0000"+
		"\u0000\u0000\u00af\u00b0\u0005!\u0000\u0000\u00b0\u00b1\u0005<\u0000\u0000"+
		"\u00b1\u00b2\u0003\u001e\u000f\u0000\u00b2\u00b3\u00034\u001a\u0000\u00b3"+
		"\u00b4\u0005\b\u0000\u0000\u00b4\u00b5\u0003\u001e\u000f\u0000\u00b5\u00b6"+
		"\u00034\u001a\u0000\u00b6\u00b7\u0003 \u0010\u0000\u00b7\u00be\u0001\u0000"+
		"\u0000\u0000\u00b8\u00b9\u0005!\u0000\u0000\u00b9\u00ba\u0005<\u0000\u0000"+
		"\u00ba\u00bb\u0003\u001e\u000f\u0000\u00bb\u00bc\u00034\u001a\u0000\u00bc"+
		"\u00be\u0001\u0000\u0000\u0000\u00bd\u00af\u0001\u0000\u0000\u0000\u00bd"+
		"\u00b8\u0001\u0000\u0000\u0000\u00be\u001b\u0001\u0000\u0000\u0000\u00bf"+
		"\u00c0\u0005\n\u0000\u0000\u00c0\u00c1\u0003*\u0015\u0000\u00c1\u00c8"+
		"\u0005\u000b\u0000\u0000\u00c2\u00c3\u0005\n\u0000\u0000\u00c3\u00c4\u0003"+
		"*\u0015\u0000\u00c4\u00c5\u0005\u000b\u0000\u0000\u00c5\u00c7\u0001\u0000"+
		"\u0000\u0000\u00c6\u00c2\u0001\u0000\u0000\u0000\u00c7\u00ca\u0001\u0000"+
		"\u0000\u0000\u00c8\u00c6\u0001\u0000\u0000\u0000\u00c8\u00c9\u0001\u0000"+
		"\u0000\u0000\u00c9\u001d\u0001\u0000\u0000\u0000\u00ca\u00c8\u0001\u0000"+
		"\u0000\u0000\u00cb\u00cc\u0005\n\u0000\u0000\u00cc\u00cd\u00056\u0000"+
		"\u0000\u00cd\u00d3\u0005\u000b\u0000\u0000\u00ce\u00cf\u0005\n\u0000\u0000"+
		"\u00cf\u00d0\u00056\u0000\u0000\u00d0\u00d2\u0005\u000b\u0000\u0000\u00d1"+
		"\u00ce\u0001\u0000\u0000\u0000\u00d2\u00d5\u0001\u0000\u0000\u0000\u00d3"+
		"\u00d1\u0001\u0000\u0000\u0000\u00d3\u00d4\u0001\u0000\u0000\u0000\u00d4"+
		"\u001f\u0001\u0000\u0000\u0000\u00d5\u00d3\u0001\u0000\u0000\u0000\u00d6"+
		"\u00d8\u0005\u0004\u0000\u0000\u00d7\u00d9\u0003\"\u0011\u0000\u00d8\u00d7"+
		"\u0001\u0000\u0000\u0000\u00d8\u00d9\u0001\u0000\u0000\u0000\u00d9\u00da"+
		"\u0001\u0000\u0000\u0000\u00da\u00db\u0005\u0005\u0000\u0000\u00db!\u0001"+
		"\u0000\u0000\u0000\u00dc\u00e1\u0003$\u0012\u0000\u00dd\u00de\u0005\u0003"+
		"\u0000\u0000\u00de\u00e0\u0003$\u0012\u0000\u00df\u00dd\u0001\u0000\u0000"+
		"\u0000\u00e0\u00e3\u0001\u0000\u0000\u0000\u00e1\u00df\u0001\u0000\u0000"+
		"\u0000\u00e1\u00e2\u0001\u0000\u0000\u0000\u00e2#\u0001\u0000\u0000\u0000"+
		"\u00e3\u00e1\u0001\u0000\u0000\u0000\u00e4\u00e7\u0003*\u0015\u0000\u00e5"+
		"\u00e7\u0003 \u0010\u0000\u00e6\u00e4\u0001\u0000\u0000\u0000\u00e6\u00e5"+
		"\u0001\u0000\u0000\u0000\u00e7%\u0001\u0000\u0000\u0000\u00e8\u00e9\u0005"+
		"<\u0000\u0000\u00e9\u00ea\u0003\u001c\u000e\u0000\u00ea\u00eb\u0005\b"+
		"\u0000\u0000\u00eb\u00ec\u0003*\u0015\u0000\u00ec\u00fe\u0001\u0000\u0000"+
		"\u0000\u00ed\u00ee\u0005<\u0000\u0000\u00ee\u00ef\u0005\b\u0000\u0000"+
		"\u00ef\u00fe\u0003*\u0015\u0000\u00f0\u00f1\u0005<\u0000\u0000\u00f1\u00f2"+
		"\u0005\f\u0000\u0000\u00f2\u00fe\u0003*\u0015\u0000\u00f3\u00f4\u0005"+
		"<\u0000\u0000\u00f4\u00f5\u0005\r\u0000\u0000\u00f5\u00fe\u0003*\u0015"+
		"\u0000\u00f6\u00f7\u0005<\u0000\u0000\u00f7\u00f8\u0005\u000e\u0000\u0000"+
		"\u00f8\u00fe\u0003*\u0015\u0000\u00f9\u00fa\u0005<\u0000\u0000\u00fa\u00fb"+
		"\u0005\u000f\u0000\u0000\u00fb\u00fe\u0003*\u0015\u0000\u00fc\u00fe\u0003"+
		"(\u0014\u0000\u00fd\u00e8\u0001\u0000\u0000\u0000\u00fd\u00ed\u0001\u0000"+
		"\u0000\u0000\u00fd\u00f0\u0001\u0000\u0000\u0000\u00fd\u00f3\u0001\u0000"+
		"\u0000\u0000\u00fd\u00f6\u0001\u0000\u0000\u0000\u00fd\u00f9\u0001\u0000"+
		"\u0000\u0000\u00fd\u00fc\u0001\u0000\u0000\u0000\u00fe\'\u0001\u0000\u0000"+
		"\u0000\u00ff\u0100\u0005<\u0000\u0000\u0100\u0101\u0007\u0001\u0000\u0000"+
		"\u0101)\u0001\u0000\u0000\u0000\u0102\u0103\u0006\u0015\uffff\uffff\u0000"+
		"\u0103\u0104\u0005\u0001\u0000\u0000\u0104\u0105\u0003*\u0015\u0000\u0105"+
		"\u0106\u0005\u0002\u0000\u0000\u0106\u010a\u0001\u0000\u0000\u0000\u0107"+
		"\u010a\u0003,\u0016\u0000\u0108\u010a\u0003\b\u0004\u0000\u0109\u0102"+
		"\u0001\u0000\u0000\u0000\u0109\u0107\u0001\u0000\u0000\u0000\u0109\u0108"+
		"\u0001\u0000\u0000\u0000\u010a\u011c\u0001\u0000\u0000\u0000\u010b\u010c"+
		"\n\b\u0000\u0000\u010c\u010d\u0007\u0002\u0000\u0000\u010d\u011b\u0003"+
		"*\u0015\t\u010e\u010f\n\u0007\u0000\u0000\u010f\u0110\u0007\u0003\u0000"+
		"\u0000\u0110\u011b\u0003*\u0015\b\u0111\u0112\n\u0006\u0000\u0000\u0112"+
		"\u0113\u0007\u0004\u0000\u0000\u0113\u011b\u0003*\u0015\u0007\u0114\u0115"+
		"\n\u0005\u0000\u0000\u0115\u0116\u0007\u0005\u0000\u0000\u0116\u011b\u0003"+
		"*\u0015\u0006\u0117\u0118\n\u0004\u0000\u0000\u0118\u0119\u0007\u0006"+
		"\u0000\u0000\u0119\u011b\u0003*\u0015\u0005\u011a\u010b\u0001\u0000\u0000"+
		"\u0000\u011a\u010e\u0001\u0000\u0000\u0000\u011a\u0111\u0001\u0000\u0000"+
		"\u0000\u011a\u0114\u0001\u0000\u0000\u0000\u011a\u0117\u0001\u0000\u0000"+
		"\u0000\u011b\u011e\u0001\u0000\u0000\u0000\u011c\u011a\u0001\u0000\u0000"+
		"\u0000\u011c\u011d\u0001\u0000\u0000\u0000\u011d+\u0001\u0000\u0000\u0000"+
		"\u011e\u011c\u0001\u0000\u0000\u0000\u011f\u0129\u00056\u0000\u0000\u0120"+
		"\u0129\u00057\u0000\u0000\u0121\u0122\u0005<\u0000\u0000\u0122\u0129\u0003"+
		"\u001c\u000e\u0000\u0123\u0129\u0005<\u0000\u0000\u0124\u0129\u00059\u0000"+
		"\u0000\u0125\u0129\u0005:\u0000\u0000\u0126\u0129\u0005;\u0000\u0000\u0127"+
		"\u0129\u00058\u0000\u0000\u0128\u011f\u0001\u0000\u0000\u0000\u0128\u0120"+
		"\u0001\u0000\u0000\u0000\u0128\u0121\u0001\u0000\u0000\u0000\u0128\u0123"+
		"\u0001\u0000\u0000\u0000\u0128\u0124\u0001\u0000\u0000\u0000\u0128\u0125"+
		"\u0001\u0000\u0000\u0000\u0128\u0126\u0001\u0000\u0000\u0000\u0128\u0127"+
		"\u0001\u0000\u0000\u0000\u0129-\u0001\u0000\u0000\u0000\u012a\u012f\u0005"+
		"<\u0000\u0000\u012b\u012c\u0005\u0003\u0000\u0000\u012c\u012e\u0005<\u0000"+
		"\u0000\u012d\u012b\u0001\u0000\u0000\u0000\u012e\u0131\u0001\u0000\u0000"+
		"\u0000\u012f\u012d\u0001\u0000\u0000\u0000\u012f\u0130\u0001\u0000\u0000"+
		"\u0000\u0130/\u0001\u0000\u0000\u0000\u0131\u012f\u0001\u0000\u0000\u0000"+
		"\u0132\u0137\u0003*\u0015\u0000\u0133\u0134\u0005\u0003\u0000\u0000\u0134"+
		"\u0136\u0003*\u0015\u0000\u0135\u0133\u0001\u0000\u0000\u0000\u0136\u0139"+
		"\u0001\u0000\u0000\u0000\u0137\u0135\u0001\u0000\u0000\u0000\u0137\u0138"+
		"\u0001\u0000\u0000\u0000\u01381\u0001\u0000\u0000\u0000\u0139\u0137\u0001"+
		"\u0000\u0000\u0000\u013a\u013d\u0005!\u0000\u0000\u013b\u013d\u0005\""+
		"\u0000\u0000\u013c\u013a\u0001\u0000\u0000\u0000\u013c\u013b\u0001\u0000"+
		"\u0000\u0000\u013d3\u0001\u0000\u0000\u0000\u013e\u0144\u00051\u0000\u0000"+
		"\u013f\u0144\u00052\u0000\u0000\u0140\u0144\u00053\u0000\u0000\u0141\u0144"+
		"\u00054\u0000\u0000\u0142\u0144\u00055\u0000\u0000\u0143\u013e\u0001\u0000"+
		"\u0000\u0000\u0143\u013f\u0001\u0000\u0000\u0000\u0143\u0140\u0001\u0000"+
		"\u0000\u0000\u0143\u0141\u0001\u0000\u0000\u0000\u0143\u0142\u0001\u0000"+
		"\u0000\u0000\u01445\u0001\u0000\u0000\u0000\u0017Hekw\u0087\u008f\u0092"+
		"\u00ad\u00bd\u00c8\u00d3\u00d8\u00e1\u00e6\u00fd\u0109\u011a\u011c\u0128"+
		"\u012f\u0137\u013c\u0143";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}