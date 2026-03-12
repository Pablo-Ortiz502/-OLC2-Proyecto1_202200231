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
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, T__30=31, 
		T__31=32, FUNC=33, MAIN=34, PVAR=35, PCONST=36, IF=37, ELSE=38, DEFAULT=39, 
		CASE=40, SWITCH=41, FOR=42, BREAK=43, CONTINUE=44, RETURN=45, PRINT=46, 
		SUBSTR=47, LEN=48, NOW=49, TYPEOF=50, PINT=51, PFLOAT=52, PBOOL=53, PSTRING=54, 
		PRUNE=55, NUM=56, FLOAT=57, NIL=58, BOOLE=59, STRING=60, RUNE=61, ID=62, 
		LINE_COMMENT=63, BLOCK_COMMENT=64, WS=65, ERROR_CHAR=66;
	public static final int
		RULE_s = 0, RULE_program = 1, RULE_functiondec = 2, RULE_paramlist = 3, 
		RULE_param = 4, RULE_typelist = 5, RULE_stmts = 6, RULE_pri = 7, RULE_reserved = 8, 
		RULE_block = 9, RULE_inst = 10, RULE_returnStmt = 11, RULE_ifStmt = 12, 
		RULE_forStmt = 13, RULE_switchStmt = 14, RULE_caseClause = 15, RULE_defaultClause = 16, 
		RULE_arraydec = 17, RULE_larrayexp = 18, RULE_larray = 19, RULE_arrayValue = 20, 
		RULE_arrayElements = 21, RULE_arrayElement = 22, RULE_dec = 23, RULE_asg = 24, 
		RULE_incdec = 25, RULE_expr = 26, RULE_vals = 27, RULE_arrVal = 28, RULE_funcCall = 29, 
		RULE_lid = 30, RULE_par = 31, RULE_lvalpar = 32, RULE_lval = 33, RULE_pre = 34, 
		RULE_type = 35;
	private static String[] makeRuleNames() {
		return new String[] {
			"s", "program", "functiondec", "paramlist", "param", "typelist", "stmts", 
			"pri", "reserved", "block", "inst", "returnStmt", "ifStmt", "forStmt", 
			"switchStmt", "caseClause", "defaultClause", "arraydec", "larrayexp", 
			"larray", "arrayValue", "arrayElements", "arrayElement", "dec", "asg", 
			"incdec", "expr", "vals", "arrVal", "funcCall", "lid", "par", "lvalpar", 
			"lval", "pre", "type"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "','", "'*'", "'{'", "'}'", "';'", "':'", "'='", 
			"'['", "']'", "':='", "'+='", "'-='", "'*='", "'/='", "'++'", "'--'", 
			"'/'", "'%'", "'+'", "'-'", "'!'", "'=='", "'!='", "'>='", "'<='", "'>'", 
			"'<'", "'&&'", "'||'", "'&'", "'func'", "'main'", "'var'", "'const'", 
			"'if'", "'else'", "'default'", "'case'", "'switch'", "'for'", "'break'", 
			"'continue'", "'return'", "'fmt.Println'", "'substr'", "'len'", "'now'", 
			"'typeOf'", "'int32'", "'float32'", "'bool'", "'string'", "'rune'", null, 
			null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, "FUNC", "MAIN", 
			"PVAR", "PCONST", "IF", "ELSE", "DEFAULT", "CASE", "SWITCH", "FOR", "BREAK", 
			"CONTINUE", "RETURN", "PRINT", "SUBSTR", "LEN", "NOW", "TYPEOF", "PINT", 
			"PFLOAT", "PBOOL", "PSTRING", "PRUNE", "NUM", "FLOAT", "NIL", "BOOLE", 
			"STRING", "RUNE", "ID", "LINE_COMMENT", "BLOCK_COMMENT", "WS", "ERROR_CHAR"
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
		public List<FunctiondecContext> functiondec() {
			return getRuleContexts(FunctiondecContext.class);
		}
		public FunctiondecContext functiondec(int i) {
			return getRuleContext(FunctiondecContext.class,i);
		}
		public SContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_s; }
	}

	public final SContext s() throws RecognitionException {
		SContext _localctx = new SContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_s);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(75);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,0,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(72);
					functiondec();
					}
					} 
				}
				setState(77);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,0,_ctx);
			}
			setState(78);
			program();
			setState(82);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==FUNC) {
				{
				{
				setState(79);
				functiondec();
				}
				}
				setState(84);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(85);
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
			setState(87);
			match(FUNC);
			setState(88);
			match(MAIN);
			setState(89);
			match(T__0);
			setState(90);
			match(T__1);
			setState(91);
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
	public static class FunctiondecContext extends ParserRuleContext {
		public FunctiondecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_functiondec; }
	 
		public FunctiondecContext() { }
		public void copyFrom(FunctiondecContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SimpleFuncContext extends FunctiondecContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamlistContext paramlist() {
			return getRuleContext(ParamlistContext.class,0);
		}
		public SimpleFuncContext(FunctiondecContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MethodContext extends FunctiondecContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamlistContext paramlist() {
			return getRuleContext(ParamlistContext.class,0);
		}
		public MethodContext(FunctiondecContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MultFuncContext extends FunctiondecContext {
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public TypelistContext typelist() {
			return getRuleContext(TypelistContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamlistContext paramlist() {
			return getRuleContext(ParamlistContext.class,0);
		}
		public MultFuncContext(FunctiondecContext ctx) { copyFrom(ctx); }
	}

	public final FunctiondecContext functiondec() throws RecognitionException {
		FunctiondecContext _localctx = new FunctiondecContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_functiondec);
		int _la;
		try {
			setState(121);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
			case 1:
				_localctx = new MultFuncContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(93);
				match(FUNC);
				setState(94);
				match(ID);
				setState(95);
				match(T__0);
				setState(97);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==ID) {
					{
					setState(96);
					paramlist();
					}
				}

				setState(99);
				match(T__1);
				setState(100);
				typelist();
				setState(101);
				block();
				}
				break;
			case 2:
				_localctx = new SimpleFuncContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(103);
				match(FUNC);
				setState(104);
				match(ID);
				setState(105);
				match(T__0);
				setState(107);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==ID) {
					{
					setState(106);
					paramlist();
					}
				}

				setState(109);
				match(T__1);
				setState(110);
				type();
				setState(111);
				block();
				}
				break;
			case 3:
				_localctx = new MethodContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(113);
				match(FUNC);
				setState(114);
				match(ID);
				setState(115);
				match(T__0);
				setState(117);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==ID) {
					{
					setState(116);
					paramlist();
					}
				}

				setState(119);
				match(T__1);
				setState(120);
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
	public static class ParamlistContext extends ParserRuleContext {
		public List<ParamContext> param() {
			return getRuleContexts(ParamContext.class);
		}
		public ParamContext param(int i) {
			return getRuleContext(ParamContext.class,i);
		}
		public ParamlistContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_paramlist; }
	}

	public final ParamlistContext paramlist() throws RecognitionException {
		ParamlistContext _localctx = new ParamlistContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_paramlist);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(123);
			param();
			setState(128);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(124);
				match(T__2);
				setState(125);
				param();
				}
				}
				setState(130);
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
	public static class ParamContext extends ParserRuleContext {
		public ParamContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_param; }
	 
		public ParamContext() { }
		public void copyFrom(ParamContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FuncParamDecContext extends ParamContext {
		public Token ref;
		public LidContext lid() {
			return getRuleContext(LidContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public FuncParamDecContext(ParamContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FuncArrayDecContext extends ParamContext {
		public Token ref;
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public LarrayContext larray() {
			return getRuleContext(LarrayContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public FuncArrayDecContext(ParamContext ctx) { copyFrom(ctx); }
	}

	public final ParamContext param() throws RecognitionException {
		ParamContext _localctx = new ParamContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_param);
		int _la;
		try {
			setState(144);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,9,_ctx) ) {
			case 1:
				_localctx = new FuncArrayDecContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(131);
				match(ID);
				setState(133);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__3) {
					{
					setState(132);
					((FuncArrayDecContext)_localctx).ref = match(T__3);
					}
				}

				setState(135);
				larray();
				setState(136);
				type();
				}
				break;
			case 2:
				_localctx = new FuncParamDecContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(138);
				lid();
				setState(140);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__3) {
					{
					setState(139);
					((FuncParamDecContext)_localctx).ref = match(T__3);
					}
				}

				setState(142);
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
	public static class TypelistContext extends ParserRuleContext {
		public List<TypeContext> type() {
			return getRuleContexts(TypeContext.class);
		}
		public TypeContext type(int i) {
			return getRuleContext(TypeContext.class,i);
		}
		public TypelistContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_typelist; }
	}

	public final TypelistContext typelist() throws RecognitionException {
		TypelistContext _localctx = new TypelistContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_typelist);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(146);
			match(T__0);
			setState(147);
			type();
			setState(150); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(148);
				match(T__2);
				setState(149);
				type();
				}
				}
				setState(152); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==T__2 );
			setState(154);
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
	public static class StmtsContext extends ParserRuleContext {
		public ArraydecContext arraydec() {
			return getRuleContext(ArraydecContext.class,0);
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
		public FuncCallContext funcCall() {
			return getRuleContext(FuncCallContext.class,0);
		}
		public DecContext dec() {
			return getRuleContext(DecContext.class,0);
		}
		public ReturnStmtContext returnStmt() {
			return getRuleContext(ReturnStmtContext.class,0);
		}
		public StmtsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_stmts; }
	}

	public final StmtsContext stmts() throws RecognitionException {
		StmtsContext _localctx = new StmtsContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_stmts);
		try {
			setState(167);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,11,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(156);
				arraydec();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(157);
				asg();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(158);
				ifStmt();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(159);
				forStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(160);
				inst();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(161);
				reserved();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(162);
				pri();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(163);
				switchStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(164);
				funcCall();
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(165);
				dec();
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(166);
				returnStmt();
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
		enterRule(_localctx, 14, RULE_pri);
		try {
			_localctx = new PrintlnContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(169);
			match(PRINT);
			setState(170);
			match(T__0);
			setState(171);
			lval();
			setState(172);
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
		enterRule(_localctx, 16, RULE_reserved);
		try {
			setState(196);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case TYPEOF:
				_localctx = new TypeOContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(174);
				match(TYPEOF);
				setState(175);
				match(T__0);
				setState(176);
				expr(0);
				setState(177);
				match(T__1);
				}
				break;
			case NOW:
				_localctx = new NowFuncContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(179);
				match(NOW);
				setState(180);
				match(T__0);
				setState(181);
				match(T__1);
				}
				break;
			case LEN:
				_localctx = new LenFuncContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(182);
				match(LEN);
				setState(183);
				match(T__0);
				setState(184);
				expr(0);
				setState(185);
				match(T__1);
				}
				break;
			case SUBSTR:
				_localctx = new SubSContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(187);
				match(SUBSTR);
				setState(188);
				match(T__0);
				setState(189);
				expr(0);
				setState(190);
				match(T__2);
				setState(191);
				expr(0);
				setState(192);
				match(T__2);
				setState(193);
				expr(0);
				setState(194);
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
		enterRule(_localctx, 18, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(198);
			match(T__4);
			setState(202);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 4613935859735986176L) != 0)) {
				{
				{
				setState(199);
				stmts();
				}
				}
				setState(204);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(205);
			match(T__5);
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
		enterRule(_localctx, 20, RULE_inst);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(207);
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
	public static class ReturnStmtContext extends ParserRuleContext {
		public TerminalNode RETURN() { return getToken(GrammarParser.RETURN, 0); }
		public LvalContext lval() {
			return getRuleContext(LvalContext.class,0);
		}
		public ReturnStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnStmt; }
	}

	public final ReturnStmtContext returnStmt() throws RecognitionException {
		ReturnStmtContext _localctx = new ReturnStmtContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_returnStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(209);
			match(RETURN);
			setState(210);
			lval();
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
		enterRule(_localctx, 24, RULE_ifStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(212);
			match(IF);
			setState(213);
			expr(0);
			setState(214);
			block();
			setState(217);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ELSE) {
				{
				setState(215);
				match(ELSE);
				setState(216);
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
		enterRule(_localctx, 26, RULE_forStmt);
		try {
			setState(233);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,15,_ctx) ) {
			case 1:
				_localctx = new LongForContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(219);
				match(FOR);
				setState(220);
				dec();
				setState(221);
				match(T__6);
				setState(222);
				expr(0);
				setState(223);
				match(T__6);
				setState(224);
				incdec();
				setState(225);
				block();
				}
				break;
			case 2:
				_localctx = new MidForContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(227);
				match(FOR);
				setState(228);
				expr(0);
				setState(229);
				block();
				}
				break;
			case 3:
				_localctx = new ShortForContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(231);
				match(FOR);
				setState(232);
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
		enterRule(_localctx, 28, RULE_switchStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(235);
			match(SWITCH);
			setState(236);
			expr(0);
			setState(237);
			match(T__4);
			setState(239); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(238);
				caseClause();
				}
				}
				setState(241); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==CASE );
			setState(244);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==DEFAULT) {
				{
				setState(243);
				defaultClause();
				}
			}

			setState(246);
			match(T__5);
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
		enterRule(_localctx, 30, RULE_caseClause);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(248);
			match(CASE);
			setState(249);
			lval();
			setState(250);
			match(T__7);
			setState(251);
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
		enterRule(_localctx, 32, RULE_defaultClause);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(253);
			match(DEFAULT);
			setState(254);
			match(T__7);
			setState(255);
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
		public LarrayContext larray() {
			return getRuleContext(LarrayContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArrValContext arrVal() {
			return getRuleContext(ArrValContext.class,0);
		}
		public LongArrayDecContext(ArraydecContext ctx) { copyFrom(ctx); }
	}

	public final ArraydecContext arraydec() throws RecognitionException {
		ArraydecContext _localctx = new ArraydecContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_arraydec);
		try {
			setState(269);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,18,_ctx) ) {
			case 1:
				_localctx = new LongArrayDecContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(257);
				match(PVAR);
				setState(258);
				match(ID);
				setState(259);
				larray();
				setState(260);
				type();
				setState(261);
				match(T__8);
				setState(262);
				arrVal();
				}
				break;
			case 2:
				_localctx = new ShortArrayDecContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(264);
				match(PVAR);
				setState(265);
				match(ID);
				setState(266);
				larray();
				setState(267);
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
		enterRule(_localctx, 36, RULE_larrayexp);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(271);
			match(T__9);
			setState(272);
			expr(0);
			setState(273);
			match(T__10);
			setState(280);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,19,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(274);
					match(T__9);
					setState(275);
					expr(0);
					setState(276);
					match(T__10);
					}
					} 
				}
				setState(282);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,19,_ctx);
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
		enterRule(_localctx, 38, RULE_larray);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(283);
			match(T__9);
			setState(284);
			match(NUM);
			setState(285);
			match(T__10);
			setState(291);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,20,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(286);
					match(T__9);
					setState(287);
					match(NUM);
					setState(288);
					match(T__10);
					}
					} 
				}
				setState(293);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,20,_ctx);
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
		enterRule(_localctx, 40, RULE_arrayValue);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(294);
			match(T__4);
			setState(296);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 9153425505150567458L) != 0)) {
				{
				setState(295);
				arrayElements();
				}
			}

			setState(299);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__2) {
				{
				setState(298);
				match(T__2);
				}
			}

			setState(301);
			match(T__5);
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
		enterRule(_localctx, 42, RULE_arrayElements);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(303);
			arrayElement();
			setState(308);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,23,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(304);
					match(T__2);
					setState(305);
					arrayElement();
					}
					} 
				}
				setState(310);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,23,_ctx);
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
		enterRule(_localctx, 44, RULE_arrayElement);
		try {
			setState(313);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
			case T__9:
			case T__22:
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
				setState(311);
				expr(0);
				}
				break;
			case T__4:
				enterOuterAlt(_localctx, 2);
				{
				setState(312);
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
		enterRule(_localctx, 46, RULE_dec);
		try {
			setState(329);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,25,_ctx) ) {
			case 1:
				_localctx = new DeclvContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(315);
				pre();
				setState(316);
				lid();
				setState(317);
				type();
				setState(318);
				match(T__8);
				setState(319);
				lval();
				}
				break;
			case 2:
				_localctx = new DeclContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(321);
				pre();
				setState(322);
				lid();
				setState(323);
				type();
				}
				break;
			case 3:
				_localctx = new SdecContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(325);
				lid();
				setState(326);
				match(T__11);
				setState(327);
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
		enterRule(_localctx, 48, RULE_asg);
		try {
			setState(352);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,26,_ctx) ) {
			case 1:
				_localctx = new ArrayAsigContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(331);
				match(ID);
				setState(332);
				larrayexp();
				setState(333);
				match(T__8);
				setState(334);
				expr(0);
				}
				break;
			case 2:
				_localctx = new AsigContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(336);
				match(ID);
				setState(337);
				match(T__8);
				setState(338);
				expr(0);
				}
				break;
			case 3:
				_localctx = new PlusAsigContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(339);
				match(ID);
				setState(340);
				match(T__12);
				setState(341);
				expr(0);
				}
				break;
			case 4:
				_localctx = new MinusAsigContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(342);
				match(ID);
				setState(343);
				match(T__13);
				setState(344);
				expr(0);
				}
				break;
			case 5:
				_localctx = new MultAsigContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(345);
				match(ID);
				setState(346);
				match(T__14);
				setState(347);
				expr(0);
				}
				break;
			case 6:
				_localctx = new DivAsigContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(348);
				match(ID);
				setState(349);
				match(T__15);
				setState(350);
				expr(0);
				}
				break;
			case 7:
				_localctx = new IndeContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(351);
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
		enterRule(_localctx, 50, RULE_incdec);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(354);
			match(ID);
			setState(355);
			((IncdecContext)_localctx).op = _input.LT(1);
			_la = _input.LA(1);
			if ( !(_la==T__16 || _la==T__17) ) {
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
	public static class NotContext extends ExprContext {
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public NotContext(ExprContext ctx) { copyFrom(ctx); }
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
		int _startState = 52;
		enterRecursionRule(_localctx, 52, RULE_expr, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(366);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__22:
				{
				_localctx = new NotContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;

				setState(358);
				match(T__22);
				setState(359);
				expr(7);
				}
				break;
			case T__0:
				{
				_localctx = new ParensContext(_localctx);
				_ctx = _localctx;
				_prevctx = _localctx;
				setState(360);
				match(T__0);
				setState(361);
				expr(0);
				setState(362);
				match(T__1);
				}
				break;
			case T__9:
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
				setState(364);
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
				setState(365);
				reserved();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			_ctx.stop = _input.LT(-1);
			setState(385);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					setState(383);
					_errHandler.sync(this);
					switch ( getInterpreter().adaptivePredict(_input,28,_ctx) ) {
					case 1:
						{
						_localctx = new MulDivModContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(368);
						if (!(precpred(_ctx, 9))) throw new FailedPredicateException(this, "precpred(_ctx, 9)");
						setState(369);
						((MulDivModContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 1572880L) != 0)) ) {
							((MulDivModContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(370);
						expr(10);
						}
						break;
					case 2:
						{
						_localctx = new AddSubContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(371);
						if (!(precpred(_ctx, 8))) throw new FailedPredicateException(this, "precpred(_ctx, 8)");
						setState(372);
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
						setState(373);
						expr(9);
						}
						break;
					case 3:
						{
						_localctx = new EqNotEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(374);
						if (!(precpred(_ctx, 6))) throw new FailedPredicateException(this, "precpred(_ctx, 6)");
						setState(375);
						((EqNotEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__23 || _la==T__24) ) {
							((EqNotEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(376);
						expr(7);
						}
						break;
					case 4:
						{
						_localctx = new MoreLessEqContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(377);
						if (!(precpred(_ctx, 5))) throw new FailedPredicateException(this, "precpred(_ctx, 5)");
						setState(378);
						((MoreLessEqContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 1006632960L) != 0)) ) {
							((MoreLessEqContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(379);
						expr(6);
						}
						break;
					case 5:
						{
						_localctx = new AndOrContext(new ExprContext(_parentctx, _parentState));
						pushNewRecursionContext(_localctx, _startState, RULE_expr);
						setState(380);
						if (!(precpred(_ctx, 4))) throw new FailedPredicateException(this, "precpred(_ctx, 4)");
						setState(381);
						((AndOrContext)_localctx).op = _input.LT(1);
						_la = _input.LA(1);
						if ( !(_la==T__29 || _la==T__30) ) {
							((AndOrContext)_localctx).op = (Token)_errHandler.recoverInline(this);
						}
						else {
							if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
							_errHandler.reportMatch(this);
							consume();
						}
						setState(382);
						expr(5);
						}
						break;
					}
					} 
				}
				setState(387);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
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
	public static class NAVContext extends ValsContext {
		public LarrayContext larray() {
			return getRuleContext(LarrayContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArrayValueContext arrayValue() {
			return getRuleContext(ArrayValueContext.class,0);
		}
		public NAVContext(ValsContext ctx) { copyFrom(ctx); }
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
	@SuppressWarnings("CheckReturnValue")
	public static class FcContext extends ValsContext {
		public FuncCallContext funcCall() {
			return getRuleContext(FuncCallContext.class,0);
		}
		public FcContext(ValsContext ctx) { copyFrom(ctx); }
	}

	public final ValsContext vals() throws RecognitionException {
		ValsContext _localctx = new ValsContext(_ctx, getState());
		enterRule(_localctx, 54, RULE_vals);
		try {
			setState(402);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,30,_ctx) ) {
			case 1:
				_localctx = new NumContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(388);
				match(NUM);
				}
				break;
			case 2:
				_localctx = new FloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(389);
				match(FLOAT);
				}
				break;
			case 3:
				_localctx = new BooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(390);
				match(BOOLE);
				}
				break;
			case 4:
				_localctx = new StringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(391);
				match(STRING);
				}
				break;
			case 5:
				_localctx = new RuneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(392);
				match(RUNE);
				}
				break;
			case 6:
				_localctx = new NilContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(393);
				match(NIL);
				}
				break;
			case 7:
				_localctx = new FcContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(394);
				funcCall();
				}
				break;
			case 8:
				_localctx = new NAVContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(395);
				larray();
				setState(396);
				type();
				setState(397);
				arrayValue();
				}
				break;
			case 9:
				_localctx = new ArrayValContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(399);
				match(ID);
				setState(400);
				larrayexp();
				}
				break;
			case 10:
				_localctx = new IdExprContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(401);
				match(ID);
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
	public static class ArrValContext extends ParserRuleContext {
		public ArrValContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrVal; }
	 
		public ArrValContext() { }
		public void copyFrom(ArrValContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NewArrayValContext extends ArrValContext {
		public LarrayContext larray() {
			return getRuleContext(LarrayContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArrayValueContext arrayValue() {
			return getRuleContext(ArrayValueContext.class,0);
		}
		public NewArrayValContext(ArrValContext ctx) { copyFrom(ctx); }
	}

	public final ArrValContext arrVal() throws RecognitionException {
		ArrValContext _localctx = new ArrValContext(_ctx, getState());
		enterRule(_localctx, 56, RULE_arrVal);
		try {
			_localctx = new NewArrayValContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(404);
			larray();
			setState(405);
			type();
			setState(406);
			arrayValue();
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
	public static class FuncCallContext extends ParserRuleContext {
		public FuncCallContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcCall; }
	 
		public FuncCallContext() { }
		public void copyFrom(FuncCallContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FunReturnContext extends FuncCallContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public LvalparContext lvalpar() {
			return getRuleContext(LvalparContext.class,0);
		}
		public FunReturnContext(FuncCallContext ctx) { copyFrom(ctx); }
	}

	public final FuncCallContext funcCall() throws RecognitionException {
		FuncCallContext _localctx = new FuncCallContext(_ctx, getState());
		enterRule(_localctx, 58, RULE_funcCall);
		int _la;
		try {
			_localctx = new FunReturnContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(408);
			match(ID);
			setState(409);
			match(T__0);
			setState(411);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 9153425509445534722L) != 0)) {
				{
				setState(410);
				lvalpar();
				}
			}

			setState(413);
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
		enterRule(_localctx, 60, RULE_lid);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(415);
			match(ID);
			setState(420);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(416);
				match(T__2);
				setState(417);
				match(ID);
				}
				}
				setState(422);
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
	public static class ParContext extends ParserRuleContext {
		public Token ref;
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ExprContext expr() {
			return getRuleContext(ExprContext.class,0);
		}
		public ParContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_par; }
	}

	public final ParContext par() throws RecognitionException {
		ParContext _localctx = new ParContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_par);
		int _la;
		try {
			setState(428);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,34,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(424);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__31) {
					{
					setState(423);
					((ParContext)_localctx).ref = match(T__31);
					}
				}

				setState(426);
				match(ID);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(427);
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
	public static class LvalparContext extends ParserRuleContext {
		public List<ParContext> par() {
			return getRuleContexts(ParContext.class);
		}
		public ParContext par(int i) {
			return getRuleContext(ParContext.class,i);
		}
		public LvalparContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_lvalpar; }
	}

	public final LvalparContext lvalpar() throws RecognitionException {
		LvalparContext _localctx = new LvalparContext(_ctx, getState());
		enterRule(_localctx, 64, RULE_lvalpar);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(430);
			par();
			setState(435);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(431);
				match(T__2);
				setState(432);
				par();
				}
				}
				setState(437);
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
		enterRule(_localctx, 66, RULE_lval);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(438);
			expr(0);
			setState(443);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__2) {
				{
				{
				setState(439);
				match(T__2);
				setState(440);
				expr(0);
				}
				}
				setState(445);
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
		enterRule(_localctx, 68, RULE_pre);
		try {
			setState(448);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PVAR:
				_localctx = new VarContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(446);
				match(PVAR);
				}
				break;
			case PCONST:
				_localctx = new ConstContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(447);
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
	public static class FunArrayTypeContext extends TypeContext {
		public LarrayContext larray() {
			return getRuleContext(LarrayContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public FunArrayTypeContext(TypeContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PfloatContext extends TypeContext {
		public TerminalNode PFLOAT() { return getToken(GrammarParser.PFLOAT, 0); }
		public PfloatContext(TypeContext ctx) { copyFrom(ctx); }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_type);
		try {
			setState(458);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PINT:
				_localctx = new PintContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(450);
				match(PINT);
				}
				break;
			case PFLOAT:
				_localctx = new PfloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(451);
				match(PFLOAT);
				}
				break;
			case PBOOL:
				_localctx = new PbooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(452);
				match(PBOOL);
				}
				break;
			case PSTRING:
				_localctx = new PstringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(453);
				match(PSTRING);
				}
				break;
			case PRUNE:
				_localctx = new PruneContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(454);
				match(PRUNE);
				}
				break;
			case T__9:
				_localctx = new FunArrayTypeContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(455);
				larray();
				setState(456);
				type();
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
		case 26:
			return expr_sempred((ExprContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean expr_sempred(ExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 9);
		case 1:
			return precpred(_ctx, 8);
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
		"\u0004\u0001B\u01cd\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0002\u001b\u0007\u001b"+
		"\u0002\u001c\u0007\u001c\u0002\u001d\u0007\u001d\u0002\u001e\u0007\u001e"+
		"\u0002\u001f\u0007\u001f\u0002 \u0007 \u0002!\u0007!\u0002\"\u0007\"\u0002"+
		"#\u0007#\u0001\u0000\u0005\u0000J\b\u0000\n\u0000\f\u0000M\t\u0000\u0001"+
		"\u0000\u0001\u0000\u0005\u0000Q\b\u0000\n\u0000\f\u0000T\t\u0000\u0001"+
		"\u0000\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0003"+
		"\u0002b\b\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0003\u0002l\b\u0002\u0001"+
		"\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0001\u0002\u0003\u0002v\b\u0002\u0001\u0002\u0001\u0002\u0003"+
		"\u0002z\b\u0002\u0001\u0003\u0001\u0003\u0001\u0003\u0005\u0003\u007f"+
		"\b\u0003\n\u0003\f\u0003\u0082\t\u0003\u0001\u0004\u0001\u0004\u0003\u0004"+
		"\u0086\b\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0003\u0004\u008d\b\u0004\u0001\u0004\u0001\u0004\u0003\u0004\u0091\b"+
		"\u0004\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0004\u0005\u0097"+
		"\b\u0005\u000b\u0005\f\u0005\u0098\u0001\u0005\u0001\u0005\u0001\u0006"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0003\u0006\u00a8\b\u0006"+
		"\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0001\b\u0003\b\u00c5\b\b\u0001\t\u0001\t\u0005\t\u00c9\b\t"+
		"\n\t\f\t\u00cc\t\t\u0001\t\u0001\t\u0001\n\u0001\n\u0001\u000b\u0001\u000b"+
		"\u0001\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0003\f\u00da\b\f"+
		"\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\r\u0001\r\u0001\r\u0001\r\u0001\r\u0003\r\u00ea\b\r\u0001\u000e"+
		"\u0001\u000e\u0001\u000e\u0001\u000e\u0004\u000e\u00f0\b\u000e\u000b\u000e"+
		"\f\u000e\u00f1\u0001\u000e\u0003\u000e\u00f5\b\u000e\u0001\u000e\u0001"+
		"\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001"+
		"\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0011\u0001\u0011\u0001"+
		"\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001"+
		"\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0003\u0011\u010e\b\u0011\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0005\u0012\u0117\b\u0012\n\u0012\f\u0012\u011a\t\u0012\u0001\u0013"+
		"\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0001\u0013\u0005\u0013"+
		"\u0122\b\u0013\n\u0013\f\u0013\u0125\t\u0013\u0001\u0014\u0001\u0014\u0003"+
		"\u0014\u0129\b\u0014\u0001\u0014\u0003\u0014\u012c\b\u0014\u0001\u0014"+
		"\u0001\u0014\u0001\u0015\u0001\u0015\u0001\u0015\u0005\u0015\u0133\b\u0015"+
		"\n\u0015\f\u0015\u0136\t\u0015\u0001\u0016\u0001\u0016\u0003\u0016\u013a"+
		"\b\u0016\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001"+
		"\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001\u0017\u0001"+
		"\u0017\u0001\u0017\u0001\u0017\u0003\u0017\u014a\b\u0017\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0003\u0018\u0161\b\u0018\u0001\u0019\u0001\u0019\u0001"+
		"\u0019\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001"+
		"\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0003\u001a\u016f\b\u001a\u0001"+
		"\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001"+
		"\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001\u001a\u0001"+
		"\u001a\u0001\u001a\u0001\u001a\u0005\u001a\u0180\b\u001a\n\u001a\f\u001a"+
		"\u0183\t\u001a\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b"+
		"\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b\u0001\u001b"+
		"\u0001\u001b\u0001\u001b\u0001\u001b\u0003\u001b\u0193\b\u001b\u0001\u001c"+
		"\u0001\u001c\u0001\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001\u001d"+
		"\u0003\u001d\u019c\b\u001d\u0001\u001d\u0001\u001d\u0001\u001e\u0001\u001e"+
		"\u0001\u001e\u0005\u001e\u01a3\b\u001e\n\u001e\f\u001e\u01a6\t\u001e\u0001"+
		"\u001f\u0003\u001f\u01a9\b\u001f\u0001\u001f\u0001\u001f\u0003\u001f\u01ad"+
		"\b\u001f\u0001 \u0001 \u0001 \u0005 \u01b2\b \n \f \u01b5\t \u0001!\u0001"+
		"!\u0001!\u0005!\u01ba\b!\n!\f!\u01bd\t!\u0001\"\u0001\"\u0003\"\u01c1"+
		"\b\"\u0001#\u0001#\u0001#\u0001#\u0001#\u0001#\u0001#\u0001#\u0003#\u01cb"+
		"\b#\u0001#\u0000\u00014$\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012"+
		"\u0014\u0016\u0018\u001a\u001c\u001e \"$&(*,.02468:<>@BDF\u0000\u0007"+
		"\u0001\u0000+,\u0001\u0000\u0011\u0012\u0002\u0000\u0004\u0004\u0013\u0014"+
		"\u0001\u0000\u0015\u0016\u0001\u0000\u0018\u0019\u0001\u0000\u001a\u001d"+
		"\u0001\u0000\u001e\u001f\u01f3\u0000K\u0001\u0000\u0000\u0000\u0002W\u0001"+
		"\u0000\u0000\u0000\u0004y\u0001\u0000\u0000\u0000\u0006{\u0001\u0000\u0000"+
		"\u0000\b\u0090\u0001\u0000\u0000\u0000\n\u0092\u0001\u0000\u0000\u0000"+
		"\f\u00a7\u0001\u0000\u0000\u0000\u000e\u00a9\u0001\u0000\u0000\u0000\u0010"+
		"\u00c4\u0001\u0000\u0000\u0000\u0012\u00c6\u0001\u0000\u0000\u0000\u0014"+
		"\u00cf\u0001\u0000\u0000\u0000\u0016\u00d1\u0001\u0000\u0000\u0000\u0018"+
		"\u00d4\u0001\u0000\u0000\u0000\u001a\u00e9\u0001\u0000\u0000\u0000\u001c"+
		"\u00eb\u0001\u0000\u0000\u0000\u001e\u00f8\u0001\u0000\u0000\u0000 \u00fd"+
		"\u0001\u0000\u0000\u0000\"\u010d\u0001\u0000\u0000\u0000$\u010f\u0001"+
		"\u0000\u0000\u0000&\u011b\u0001\u0000\u0000\u0000(\u0126\u0001\u0000\u0000"+
		"\u0000*\u012f\u0001\u0000\u0000\u0000,\u0139\u0001\u0000\u0000\u0000."+
		"\u0149\u0001\u0000\u0000\u00000\u0160\u0001\u0000\u0000\u00002\u0162\u0001"+
		"\u0000\u0000\u00004\u016e\u0001\u0000\u0000\u00006\u0192\u0001\u0000\u0000"+
		"\u00008\u0194\u0001\u0000\u0000\u0000:\u0198\u0001\u0000\u0000\u0000<"+
		"\u019f\u0001\u0000\u0000\u0000>\u01ac\u0001\u0000\u0000\u0000@\u01ae\u0001"+
		"\u0000\u0000\u0000B\u01b6\u0001\u0000\u0000\u0000D\u01c0\u0001\u0000\u0000"+
		"\u0000F\u01ca\u0001\u0000\u0000\u0000HJ\u0003\u0004\u0002\u0000IH\u0001"+
		"\u0000\u0000\u0000JM\u0001\u0000\u0000\u0000KI\u0001\u0000\u0000\u0000"+
		"KL\u0001\u0000\u0000\u0000LN\u0001\u0000\u0000\u0000MK\u0001\u0000\u0000"+
		"\u0000NR\u0003\u0002\u0001\u0000OQ\u0003\u0004\u0002\u0000PO\u0001\u0000"+
		"\u0000\u0000QT\u0001\u0000\u0000\u0000RP\u0001\u0000\u0000\u0000RS\u0001"+
		"\u0000\u0000\u0000SU\u0001\u0000\u0000\u0000TR\u0001\u0000\u0000\u0000"+
		"UV\u0005\u0000\u0000\u0001V\u0001\u0001\u0000\u0000\u0000WX\u0005!\u0000"+
		"\u0000XY\u0005\"\u0000\u0000YZ\u0005\u0001\u0000\u0000Z[\u0005\u0002\u0000"+
		"\u0000[\\\u0003\u0012\t\u0000\\\u0003\u0001\u0000\u0000\u0000]^\u0005"+
		"!\u0000\u0000^_\u0005>\u0000\u0000_a\u0005\u0001\u0000\u0000`b\u0003\u0006"+
		"\u0003\u0000a`\u0001\u0000\u0000\u0000ab\u0001\u0000\u0000\u0000bc\u0001"+
		"\u0000\u0000\u0000cd\u0005\u0002\u0000\u0000de\u0003\n\u0005\u0000ef\u0003"+
		"\u0012\t\u0000fz\u0001\u0000\u0000\u0000gh\u0005!\u0000\u0000hi\u0005"+
		">\u0000\u0000ik\u0005\u0001\u0000\u0000jl\u0003\u0006\u0003\u0000kj\u0001"+
		"\u0000\u0000\u0000kl\u0001\u0000\u0000\u0000lm\u0001\u0000\u0000\u0000"+
		"mn\u0005\u0002\u0000\u0000no\u0003F#\u0000op\u0003\u0012\t\u0000pz\u0001"+
		"\u0000\u0000\u0000qr\u0005!\u0000\u0000rs\u0005>\u0000\u0000su\u0005\u0001"+
		"\u0000\u0000tv\u0003\u0006\u0003\u0000ut\u0001\u0000\u0000\u0000uv\u0001"+
		"\u0000\u0000\u0000vw\u0001\u0000\u0000\u0000wx\u0005\u0002\u0000\u0000"+
		"xz\u0003\u0012\t\u0000y]\u0001\u0000\u0000\u0000yg\u0001\u0000\u0000\u0000"+
		"yq\u0001\u0000\u0000\u0000z\u0005\u0001\u0000\u0000\u0000{\u0080\u0003"+
		"\b\u0004\u0000|}\u0005\u0003\u0000\u0000}\u007f\u0003\b\u0004\u0000~|"+
		"\u0001\u0000\u0000\u0000\u007f\u0082\u0001\u0000\u0000\u0000\u0080~\u0001"+
		"\u0000\u0000\u0000\u0080\u0081\u0001\u0000\u0000\u0000\u0081\u0007\u0001"+
		"\u0000\u0000\u0000\u0082\u0080\u0001\u0000\u0000\u0000\u0083\u0085\u0005"+
		">\u0000\u0000\u0084\u0086\u0005\u0004\u0000\u0000\u0085\u0084\u0001\u0000"+
		"\u0000\u0000\u0085\u0086\u0001\u0000\u0000\u0000\u0086\u0087\u0001\u0000"+
		"\u0000\u0000\u0087\u0088\u0003&\u0013\u0000\u0088\u0089\u0003F#\u0000"+
		"\u0089\u0091\u0001\u0000\u0000\u0000\u008a\u008c\u0003<\u001e\u0000\u008b"+
		"\u008d\u0005\u0004\u0000\u0000\u008c\u008b\u0001\u0000\u0000\u0000\u008c"+
		"\u008d\u0001\u0000\u0000\u0000\u008d\u008e\u0001\u0000\u0000\u0000\u008e"+
		"\u008f\u0003F#\u0000\u008f\u0091\u0001\u0000\u0000\u0000\u0090\u0083\u0001"+
		"\u0000\u0000\u0000\u0090\u008a\u0001\u0000\u0000\u0000\u0091\t\u0001\u0000"+
		"\u0000\u0000\u0092\u0093\u0005\u0001\u0000\u0000\u0093\u0096\u0003F#\u0000"+
		"\u0094\u0095\u0005\u0003\u0000\u0000\u0095\u0097\u0003F#\u0000\u0096\u0094"+
		"\u0001\u0000\u0000\u0000\u0097\u0098\u0001\u0000\u0000\u0000\u0098\u0096"+
		"\u0001\u0000\u0000\u0000\u0098\u0099\u0001\u0000\u0000\u0000\u0099\u009a"+
		"\u0001\u0000\u0000\u0000\u009a\u009b\u0005\u0002\u0000\u0000\u009b\u000b"+
		"\u0001\u0000\u0000\u0000\u009c\u00a8\u0003\"\u0011\u0000\u009d\u00a8\u0003"+
		"0\u0018\u0000\u009e\u00a8\u0003\u0018\f\u0000\u009f\u00a8\u0003\u001a"+
		"\r\u0000\u00a0\u00a8\u0003\u0014\n\u0000\u00a1\u00a8\u0003\u0010\b\u0000"+
		"\u00a2\u00a8\u0003\u000e\u0007\u0000\u00a3\u00a8\u0003\u001c\u000e\u0000"+
		"\u00a4\u00a8\u0003:\u001d\u0000\u00a5\u00a8\u0003.\u0017\u0000\u00a6\u00a8"+
		"\u0003\u0016\u000b\u0000\u00a7\u009c\u0001\u0000\u0000\u0000\u00a7\u009d"+
		"\u0001\u0000\u0000\u0000\u00a7\u009e\u0001\u0000\u0000\u0000\u00a7\u009f"+
		"\u0001\u0000\u0000\u0000\u00a7\u00a0\u0001\u0000\u0000\u0000\u00a7\u00a1"+
		"\u0001\u0000\u0000\u0000\u00a7\u00a2\u0001\u0000\u0000\u0000\u00a7\u00a3"+
		"\u0001\u0000\u0000\u0000\u00a7\u00a4\u0001\u0000\u0000\u0000\u00a7\u00a5"+
		"\u0001\u0000\u0000\u0000\u00a7\u00a6\u0001\u0000\u0000\u0000\u00a8\r\u0001"+
		"\u0000\u0000\u0000\u00a9\u00aa\u0005.\u0000\u0000\u00aa\u00ab\u0005\u0001"+
		"\u0000\u0000\u00ab\u00ac\u0003B!\u0000\u00ac\u00ad\u0005\u0002\u0000\u0000"+
		"\u00ad\u000f\u0001\u0000\u0000\u0000\u00ae\u00af\u00052\u0000\u0000\u00af"+
		"\u00b0\u0005\u0001\u0000\u0000\u00b0\u00b1\u00034\u001a\u0000\u00b1\u00b2"+
		"\u0005\u0002\u0000\u0000\u00b2\u00c5\u0001\u0000\u0000\u0000\u00b3\u00b4"+
		"\u00051\u0000\u0000\u00b4\u00b5\u0005\u0001\u0000\u0000\u00b5\u00c5\u0005"+
		"\u0002\u0000\u0000\u00b6\u00b7\u00050\u0000\u0000\u00b7\u00b8\u0005\u0001"+
		"\u0000\u0000\u00b8\u00b9\u00034\u001a\u0000\u00b9\u00ba\u0005\u0002\u0000"+
		"\u0000\u00ba\u00c5\u0001\u0000\u0000\u0000\u00bb\u00bc\u0005/\u0000\u0000"+
		"\u00bc\u00bd\u0005\u0001\u0000\u0000\u00bd\u00be\u00034\u001a\u0000\u00be"+
		"\u00bf\u0005\u0003\u0000\u0000\u00bf\u00c0\u00034\u001a\u0000\u00c0\u00c1"+
		"\u0005\u0003\u0000\u0000\u00c1\u00c2\u00034\u001a\u0000\u00c2\u00c3\u0005"+
		"\u0002\u0000\u0000\u00c3\u00c5\u0001\u0000\u0000\u0000\u00c4\u00ae\u0001"+
		"\u0000\u0000\u0000\u00c4\u00b3\u0001\u0000\u0000\u0000\u00c4\u00b6\u0001"+
		"\u0000\u0000\u0000\u00c4\u00bb\u0001\u0000\u0000\u0000\u00c5\u0011\u0001"+
		"\u0000\u0000\u0000\u00c6\u00ca\u0005\u0005\u0000\u0000\u00c7\u00c9\u0003"+
		"\f\u0006\u0000\u00c8\u00c7\u0001\u0000\u0000\u0000\u00c9\u00cc\u0001\u0000"+
		"\u0000\u0000\u00ca\u00c8\u0001\u0000\u0000\u0000\u00ca\u00cb\u0001\u0000"+
		"\u0000\u0000\u00cb\u00cd\u0001\u0000\u0000\u0000\u00cc\u00ca\u0001\u0000"+
		"\u0000\u0000\u00cd\u00ce\u0005\u0006\u0000\u0000\u00ce\u0013\u0001\u0000"+
		"\u0000\u0000\u00cf\u00d0\u0007\u0000\u0000\u0000\u00d0\u0015\u0001\u0000"+
		"\u0000\u0000\u00d1\u00d2\u0005-\u0000\u0000\u00d2\u00d3\u0003B!\u0000"+
		"\u00d3\u0017\u0001\u0000\u0000\u0000\u00d4\u00d5\u0005%\u0000\u0000\u00d5"+
		"\u00d6\u00034\u001a\u0000\u00d6\u00d9\u0003\u0012\t\u0000\u00d7\u00d8"+
		"\u0005&\u0000\u0000\u00d8\u00da\u0003\u0012\t\u0000\u00d9\u00d7\u0001"+
		"\u0000\u0000\u0000\u00d9\u00da\u0001\u0000\u0000\u0000\u00da\u0019\u0001"+
		"\u0000\u0000\u0000\u00db\u00dc\u0005*\u0000\u0000\u00dc\u00dd\u0003.\u0017"+
		"\u0000\u00dd\u00de\u0005\u0007\u0000\u0000\u00de\u00df\u00034\u001a\u0000"+
		"\u00df\u00e0\u0005\u0007\u0000\u0000\u00e0\u00e1\u00032\u0019\u0000\u00e1"+
		"\u00e2\u0003\u0012\t\u0000\u00e2\u00ea\u0001\u0000\u0000\u0000\u00e3\u00e4"+
		"\u0005*\u0000\u0000\u00e4\u00e5\u00034\u001a\u0000\u00e5\u00e6\u0003\u0012"+
		"\t\u0000\u00e6\u00ea\u0001\u0000\u0000\u0000\u00e7\u00e8\u0005*\u0000"+
		"\u0000\u00e8\u00ea\u0003\u0012\t\u0000\u00e9\u00db\u0001\u0000\u0000\u0000"+
		"\u00e9\u00e3\u0001\u0000\u0000\u0000\u00e9\u00e7\u0001\u0000\u0000\u0000"+
		"\u00ea\u001b\u0001\u0000\u0000\u0000\u00eb\u00ec\u0005)\u0000\u0000\u00ec"+
		"\u00ed\u00034\u001a\u0000\u00ed\u00ef\u0005\u0005\u0000\u0000\u00ee\u00f0"+
		"\u0003\u001e\u000f\u0000\u00ef\u00ee\u0001\u0000\u0000\u0000\u00f0\u00f1"+
		"\u0001\u0000\u0000\u0000\u00f1\u00ef\u0001\u0000\u0000\u0000\u00f1\u00f2"+
		"\u0001\u0000\u0000\u0000\u00f2\u00f4\u0001\u0000\u0000\u0000\u00f3\u00f5"+
		"\u0003 \u0010\u0000\u00f4\u00f3\u0001\u0000\u0000\u0000\u00f4\u00f5\u0001"+
		"\u0000\u0000\u0000\u00f5\u00f6\u0001\u0000\u0000\u0000\u00f6\u00f7\u0005"+
		"\u0006\u0000\u0000\u00f7\u001d\u0001\u0000\u0000\u0000\u00f8\u00f9\u0005"+
		"(\u0000\u0000\u00f9\u00fa\u0003B!\u0000\u00fa\u00fb\u0005\b\u0000\u0000"+
		"\u00fb\u00fc\u0003\f\u0006\u0000\u00fc\u001f\u0001\u0000\u0000\u0000\u00fd"+
		"\u00fe\u0005\'\u0000\u0000\u00fe\u00ff\u0005\b\u0000\u0000\u00ff\u0100"+
		"\u0003\f\u0006\u0000\u0100!\u0001\u0000\u0000\u0000\u0101\u0102\u0005"+
		"#\u0000\u0000\u0102\u0103\u0005>\u0000\u0000\u0103\u0104\u0003&\u0013"+
		"\u0000\u0104\u0105\u0003F#\u0000\u0105\u0106\u0005\t\u0000\u0000\u0106"+
		"\u0107\u00038\u001c\u0000\u0107\u010e\u0001\u0000\u0000\u0000\u0108\u0109"+
		"\u0005#\u0000\u0000\u0109\u010a\u0005>\u0000\u0000\u010a\u010b\u0003&"+
		"\u0013\u0000\u010b\u010c\u0003F#\u0000\u010c\u010e\u0001\u0000\u0000\u0000"+
		"\u010d\u0101\u0001\u0000\u0000\u0000\u010d\u0108\u0001\u0000\u0000\u0000"+
		"\u010e#\u0001\u0000\u0000\u0000\u010f\u0110\u0005\n\u0000\u0000\u0110"+
		"\u0111\u00034\u001a\u0000\u0111\u0118\u0005\u000b\u0000\u0000\u0112\u0113"+
		"\u0005\n\u0000\u0000\u0113\u0114\u00034\u001a\u0000\u0114\u0115\u0005"+
		"\u000b\u0000\u0000\u0115\u0117\u0001\u0000\u0000\u0000\u0116\u0112\u0001"+
		"\u0000\u0000\u0000\u0117\u011a\u0001\u0000\u0000\u0000\u0118\u0116\u0001"+
		"\u0000\u0000\u0000\u0118\u0119\u0001\u0000\u0000\u0000\u0119%\u0001\u0000"+
		"\u0000\u0000\u011a\u0118\u0001\u0000\u0000\u0000\u011b\u011c\u0005\n\u0000"+
		"\u0000\u011c\u011d\u00058\u0000\u0000\u011d\u0123\u0005\u000b\u0000\u0000"+
		"\u011e\u011f\u0005\n\u0000\u0000\u011f\u0120\u00058\u0000\u0000\u0120"+
		"\u0122\u0005\u000b\u0000\u0000\u0121\u011e\u0001\u0000\u0000\u0000\u0122"+
		"\u0125\u0001\u0000\u0000\u0000\u0123\u0121\u0001\u0000\u0000\u0000\u0123"+
		"\u0124\u0001\u0000\u0000\u0000\u0124\'\u0001\u0000\u0000\u0000\u0125\u0123"+
		"\u0001\u0000\u0000\u0000\u0126\u0128\u0005\u0005\u0000\u0000\u0127\u0129"+
		"\u0003*\u0015\u0000\u0128\u0127\u0001\u0000\u0000\u0000\u0128\u0129\u0001"+
		"\u0000\u0000\u0000\u0129\u012b\u0001\u0000\u0000\u0000\u012a\u012c\u0005"+
		"\u0003\u0000\u0000\u012b\u012a\u0001\u0000\u0000\u0000\u012b\u012c\u0001"+
		"\u0000\u0000\u0000\u012c\u012d\u0001\u0000\u0000\u0000\u012d\u012e\u0005"+
		"\u0006\u0000\u0000\u012e)\u0001\u0000\u0000\u0000\u012f\u0134\u0003,\u0016"+
		"\u0000\u0130\u0131\u0005\u0003\u0000\u0000\u0131\u0133\u0003,\u0016\u0000"+
		"\u0132\u0130\u0001\u0000\u0000\u0000\u0133\u0136\u0001\u0000\u0000\u0000"+
		"\u0134\u0132\u0001\u0000\u0000\u0000\u0134\u0135\u0001\u0000\u0000\u0000"+
		"\u0135+\u0001\u0000\u0000\u0000\u0136\u0134\u0001\u0000\u0000\u0000\u0137"+
		"\u013a\u00034\u001a\u0000\u0138\u013a\u0003(\u0014\u0000\u0139\u0137\u0001"+
		"\u0000\u0000\u0000\u0139\u0138\u0001\u0000\u0000\u0000\u013a-\u0001\u0000"+
		"\u0000\u0000\u013b\u013c\u0003D\"\u0000\u013c\u013d\u0003<\u001e\u0000"+
		"\u013d\u013e\u0003F#\u0000\u013e\u013f\u0005\t\u0000\u0000\u013f\u0140"+
		"\u0003B!\u0000\u0140\u014a\u0001\u0000\u0000\u0000\u0141\u0142\u0003D"+
		"\"\u0000\u0142\u0143\u0003<\u001e\u0000\u0143\u0144\u0003F#\u0000\u0144"+
		"\u014a\u0001\u0000\u0000\u0000\u0145\u0146\u0003<\u001e\u0000\u0146\u0147"+
		"\u0005\f\u0000\u0000\u0147\u0148\u0003B!\u0000\u0148\u014a\u0001\u0000"+
		"\u0000\u0000\u0149\u013b\u0001\u0000\u0000\u0000\u0149\u0141\u0001\u0000"+
		"\u0000\u0000\u0149\u0145\u0001\u0000\u0000\u0000\u014a/\u0001\u0000\u0000"+
		"\u0000\u014b\u014c\u0005>\u0000\u0000\u014c\u014d\u0003$\u0012\u0000\u014d"+
		"\u014e\u0005\t\u0000\u0000\u014e\u014f\u00034\u001a\u0000\u014f\u0161"+
		"\u0001\u0000\u0000\u0000\u0150\u0151\u0005>\u0000\u0000\u0151\u0152\u0005"+
		"\t\u0000\u0000\u0152\u0161\u00034\u001a\u0000\u0153\u0154\u0005>\u0000"+
		"\u0000\u0154\u0155\u0005\r\u0000\u0000\u0155\u0161\u00034\u001a\u0000"+
		"\u0156\u0157\u0005>\u0000\u0000\u0157\u0158\u0005\u000e\u0000\u0000\u0158"+
		"\u0161\u00034\u001a\u0000\u0159\u015a\u0005>\u0000\u0000\u015a\u015b\u0005"+
		"\u000f\u0000\u0000\u015b\u0161\u00034\u001a\u0000\u015c\u015d\u0005>\u0000"+
		"\u0000\u015d\u015e\u0005\u0010\u0000\u0000\u015e\u0161\u00034\u001a\u0000"+
		"\u015f\u0161\u00032\u0019\u0000\u0160\u014b\u0001\u0000\u0000\u0000\u0160"+
		"\u0150\u0001\u0000\u0000\u0000\u0160\u0153\u0001\u0000\u0000\u0000\u0160"+
		"\u0156\u0001\u0000\u0000\u0000\u0160\u0159\u0001\u0000\u0000\u0000\u0160"+
		"\u015c\u0001\u0000\u0000\u0000\u0160\u015f\u0001\u0000\u0000\u0000\u0161"+
		"1\u0001\u0000\u0000\u0000\u0162\u0163\u0005>\u0000\u0000\u0163\u0164\u0007"+
		"\u0001\u0000\u0000\u01643\u0001\u0000\u0000\u0000\u0165\u0166\u0006\u001a"+
		"\uffff\uffff\u0000\u0166\u0167\u0005\u0017\u0000\u0000\u0167\u016f\u0003"+
		"4\u001a\u0007\u0168\u0169\u0005\u0001\u0000\u0000\u0169\u016a\u00034\u001a"+
		"\u0000\u016a\u016b\u0005\u0002\u0000\u0000\u016b\u016f\u0001\u0000\u0000"+
		"\u0000\u016c\u016f\u00036\u001b\u0000\u016d\u016f\u0003\u0010\b\u0000"+
		"\u016e\u0165\u0001\u0000\u0000\u0000\u016e\u0168\u0001\u0000\u0000\u0000"+
		"\u016e\u016c\u0001\u0000\u0000\u0000\u016e\u016d\u0001\u0000\u0000\u0000"+
		"\u016f\u0181\u0001\u0000\u0000\u0000\u0170\u0171\n\t\u0000\u0000\u0171"+
		"\u0172\u0007\u0002\u0000\u0000\u0172\u0180\u00034\u001a\n\u0173\u0174"+
		"\n\b\u0000\u0000\u0174\u0175\u0007\u0003\u0000\u0000\u0175\u0180\u0003"+
		"4\u001a\t\u0176\u0177\n\u0006\u0000\u0000\u0177\u0178\u0007\u0004\u0000"+
		"\u0000\u0178\u0180\u00034\u001a\u0007\u0179\u017a\n\u0005\u0000\u0000"+
		"\u017a\u017b\u0007\u0005\u0000\u0000\u017b\u0180\u00034\u001a\u0006\u017c"+
		"\u017d\n\u0004\u0000\u0000\u017d\u017e\u0007\u0006\u0000\u0000\u017e\u0180"+
		"\u00034\u001a\u0005\u017f\u0170\u0001\u0000\u0000\u0000\u017f\u0173\u0001"+
		"\u0000\u0000\u0000\u017f\u0176\u0001\u0000\u0000\u0000\u017f\u0179\u0001"+
		"\u0000\u0000\u0000\u017f\u017c\u0001\u0000\u0000\u0000\u0180\u0183\u0001"+
		"\u0000\u0000\u0000\u0181\u017f\u0001\u0000\u0000\u0000\u0181\u0182\u0001"+
		"\u0000\u0000\u0000\u01825\u0001\u0000\u0000\u0000\u0183\u0181\u0001\u0000"+
		"\u0000\u0000\u0184\u0193\u00058\u0000\u0000\u0185\u0193\u00059\u0000\u0000"+
		"\u0186\u0193\u0005;\u0000\u0000\u0187\u0193\u0005<\u0000\u0000\u0188\u0193"+
		"\u0005=\u0000\u0000\u0189\u0193\u0005:\u0000\u0000\u018a\u0193\u0003:"+
		"\u001d\u0000\u018b\u018c\u0003&\u0013\u0000\u018c\u018d\u0003F#\u0000"+
		"\u018d\u018e\u0003(\u0014\u0000\u018e\u0193\u0001\u0000\u0000\u0000\u018f"+
		"\u0190\u0005>\u0000\u0000\u0190\u0193\u0003$\u0012\u0000\u0191\u0193\u0005"+
		">\u0000\u0000\u0192\u0184\u0001\u0000\u0000\u0000\u0192\u0185\u0001\u0000"+
		"\u0000\u0000\u0192\u0186\u0001\u0000\u0000\u0000\u0192\u0187\u0001\u0000"+
		"\u0000\u0000\u0192\u0188\u0001\u0000\u0000\u0000\u0192\u0189\u0001\u0000"+
		"\u0000\u0000\u0192\u018a\u0001\u0000\u0000\u0000\u0192\u018b\u0001\u0000"+
		"\u0000\u0000\u0192\u018f\u0001\u0000\u0000\u0000\u0192\u0191\u0001\u0000"+
		"\u0000\u0000\u01937\u0001\u0000\u0000\u0000\u0194\u0195\u0003&\u0013\u0000"+
		"\u0195\u0196\u0003F#\u0000\u0196\u0197\u0003(\u0014\u0000\u01979\u0001"+
		"\u0000\u0000\u0000\u0198\u0199\u0005>\u0000\u0000\u0199\u019b\u0005\u0001"+
		"\u0000\u0000\u019a\u019c\u0003@ \u0000\u019b\u019a\u0001\u0000\u0000\u0000"+
		"\u019b\u019c\u0001\u0000\u0000\u0000\u019c\u019d\u0001\u0000\u0000\u0000"+
		"\u019d\u019e\u0005\u0002\u0000\u0000\u019e;\u0001\u0000\u0000\u0000\u019f"+
		"\u01a4\u0005>\u0000\u0000\u01a0\u01a1\u0005\u0003\u0000\u0000\u01a1\u01a3"+
		"\u0005>\u0000\u0000\u01a2\u01a0\u0001\u0000\u0000\u0000\u01a3\u01a6\u0001"+
		"\u0000\u0000\u0000\u01a4\u01a2\u0001\u0000\u0000\u0000\u01a4\u01a5\u0001"+
		"\u0000\u0000\u0000\u01a5=\u0001\u0000\u0000\u0000\u01a6\u01a4\u0001\u0000"+
		"\u0000\u0000\u01a7\u01a9\u0005 \u0000\u0000\u01a8\u01a7\u0001\u0000\u0000"+
		"\u0000\u01a8\u01a9\u0001\u0000\u0000\u0000\u01a9\u01aa\u0001\u0000\u0000"+
		"\u0000\u01aa\u01ad\u0005>\u0000\u0000\u01ab\u01ad\u00034\u001a\u0000\u01ac"+
		"\u01a8\u0001\u0000\u0000\u0000\u01ac\u01ab\u0001\u0000\u0000\u0000\u01ad"+
		"?\u0001\u0000\u0000\u0000\u01ae\u01b3\u0003>\u001f\u0000\u01af\u01b0\u0005"+
		"\u0003\u0000\u0000\u01b0\u01b2\u0003>\u001f\u0000\u01b1\u01af\u0001\u0000"+
		"\u0000\u0000\u01b2\u01b5\u0001\u0000\u0000\u0000\u01b3\u01b1\u0001\u0000"+
		"\u0000\u0000\u01b3\u01b4\u0001\u0000\u0000\u0000\u01b4A\u0001\u0000\u0000"+
		"\u0000\u01b5\u01b3\u0001\u0000\u0000\u0000\u01b6\u01bb\u00034\u001a\u0000"+
		"\u01b7\u01b8\u0005\u0003\u0000\u0000\u01b8\u01ba\u00034\u001a\u0000\u01b9"+
		"\u01b7\u0001\u0000\u0000\u0000\u01ba\u01bd\u0001\u0000\u0000\u0000\u01bb"+
		"\u01b9\u0001\u0000\u0000\u0000\u01bb\u01bc\u0001\u0000\u0000\u0000\u01bc"+
		"C\u0001\u0000\u0000\u0000\u01bd\u01bb\u0001\u0000\u0000\u0000\u01be\u01c1"+
		"\u0005#\u0000\u0000\u01bf\u01c1\u0005$\u0000\u0000\u01c0\u01be\u0001\u0000"+
		"\u0000\u0000\u01c0\u01bf\u0001\u0000\u0000\u0000\u01c1E\u0001\u0000\u0000"+
		"\u0000\u01c2\u01cb\u00053\u0000\u0000\u01c3\u01cb\u00054\u0000\u0000\u01c4"+
		"\u01cb\u00055\u0000\u0000\u01c5\u01cb\u00056\u0000\u0000\u01c6\u01cb\u0005"+
		"7\u0000\u0000\u01c7\u01c8\u0003&\u0013\u0000\u01c8\u01c9\u0003F#\u0000"+
		"\u01c9\u01cb\u0001\u0000\u0000\u0000\u01ca\u01c2\u0001\u0000\u0000\u0000"+
		"\u01ca\u01c3\u0001\u0000\u0000\u0000\u01ca\u01c4\u0001\u0000\u0000\u0000"+
		"\u01ca\u01c5\u0001\u0000\u0000\u0000\u01ca\u01c6\u0001\u0000\u0000\u0000"+
		"\u01ca\u01c7\u0001\u0000\u0000\u0000\u01cbG\u0001\u0000\u0000\u0000\'"+
		"KRakuy\u0080\u0085\u008c\u0090\u0098\u00a7\u00c4\u00ca\u00d9\u00e9\u00f1"+
		"\u00f4\u010d\u0118\u0123\u0128\u012b\u0134\u0139\u0149\u0160\u016e\u017f"+
		"\u0181\u0192\u019b\u01a4\u01a8\u01ac\u01b3\u01bb\u01c0\u01ca";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}