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
		T__9=10, FUNC=11, MAIN=12, PVAR=13, PCONST=14, PINT=15, PFLOAT=16, PBOOL=17, 
		PSTRING=18, NUM=19, FLOAT=20, NIL=21, BOOLE=22, STRING=23, ID=24, LINE_COMMENT=25, 
		BLOCK_COMMENT=26, WS=27;
	public static final int
		RULE_s = 0, RULE_stmts = 1, RULE_dec = 2, RULE_asg = 3, RULE_lid = 4, 
		RULE_lval = 5, RULE_pre = 6, RULE_type = 7, RULE_val = 8;
	private static String[] makeRuleNames() {
		return new String[] {
			"s", "stmts", "dec", "asg", "lid", "lval", "pre", "type", "val"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'('", "')'", "'{'", "'}'", "'='", "'+='", "'-='", "'*='", "'/='", 
			"','", "'func'", "'main'", "'var'", "'const'", "'int32'", "'float32'", 
			"'boole'", "'string'", null, null, "'nil'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, "FUNC", 
			"MAIN", "PVAR", "PCONST", "PINT", "PFLOAT", "PBOOL", "PSTRING", "NUM", 
			"FLOAT", "NIL", "BOOLE", "STRING", "ID", "LINE_COMMENT", "BLOCK_COMMENT", 
			"WS"
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
		public TerminalNode FUNC() { return getToken(GrammarParser.FUNC, 0); }
		public TerminalNode MAIN() { return getToken(GrammarParser.MAIN, 0); }
		public TerminalNode EOF() { return getToken(GrammarParser.EOF, 0); }
		public List<StmtsContext> stmts() {
			return getRuleContexts(StmtsContext.class);
		}
		public StmtsContext stmts(int i) {
			return getRuleContext(StmtsContext.class,i);
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
			enterOuterAlt(_localctx, 1);
			{
			setState(18);
			match(FUNC);
			setState(19);
			match(MAIN);
			setState(20);
			match(T__0);
			setState(21);
			match(T__1);
			setState(22);
			match(T__2);
			setState(26);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 16801792L) != 0)) {
				{
				{
				setState(23);
				stmts();
				}
				}
				setState(28);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(29);
			match(T__3);
			setState(30);
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
	public static class StmtsContext extends ParserRuleContext {
		public DecContext dec() {
			return getRuleContext(DecContext.class,0);
		}
		public AsgContext asg() {
			return getRuleContext(AsgContext.class,0);
		}
		public StmtsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_stmts; }
	}

	public final StmtsContext stmts() throws RecognitionException {
		StmtsContext _localctx = new StmtsContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_stmts);
		try {
			setState(34);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,1,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(32);
				dec();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(33);
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
		enterRule(_localctx, 4, RULE_dec);
		try {
			setState(50);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,2,_ctx) ) {
			case 1:
				_localctx = new DeclvContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(36);
				pre();
				setState(37);
				lid();
				setState(38);
				type();
				setState(39);
				match(T__4);
				setState(40);
				lval();
				}
				break;
			case 2:
				_localctx = new DeclContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(42);
				pre();
				setState(43);
				lid();
				setState(44);
				type();
				}
				break;
			case 3:
				_localctx = new SdecContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(46);
				lid();
				setState(47);
				match(T__4);
				setState(48);
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
		public ValContext val() {
			return getRuleContext(ValContext.class,0);
		}
		public MultAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PlusAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ValContext val() {
			return getRuleContext(ValContext.class,0);
		}
		public PlusAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class DivAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ValContext val() {
			return getRuleContext(ValContext.class,0);
		}
		public DivAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MinusAsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ValContext val() {
			return getRuleContext(ValContext.class,0);
		}
		public MinusAsigContext(AsgContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AsigContext extends AsgContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ValContext val() {
			return getRuleContext(ValContext.class,0);
		}
		public AsigContext(AsgContext ctx) { copyFrom(ctx); }
	}

	public final AsgContext asg() throws RecognitionException {
		AsgContext _localctx = new AsgContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_asg);
		try {
			setState(67);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,3,_ctx) ) {
			case 1:
				_localctx = new AsigContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(52);
				match(ID);
				setState(53);
				match(T__4);
				setState(54);
				val();
				}
				break;
			case 2:
				_localctx = new PlusAsigContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(55);
				match(ID);
				setState(56);
				match(T__5);
				setState(57);
				val();
				}
				break;
			case 3:
				_localctx = new MinusAsigContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(58);
				match(ID);
				setState(59);
				match(T__6);
				setState(60);
				val();
				}
				break;
			case 4:
				_localctx = new MultAsigContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(61);
				match(ID);
				setState(62);
				match(T__7);
				setState(63);
				val();
				}
				break;
			case 5:
				_localctx = new DivAsigContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(64);
				match(ID);
				setState(65);
				match(T__8);
				setState(66);
				val();
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
		enterRule(_localctx, 8, RULE_lid);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(69);
			match(ID);
			setState(74);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__9) {
				{
				{
				setState(70);
				match(T__9);
				setState(71);
				match(ID);
				}
				}
				setState(76);
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
		public List<ValContext> val() {
			return getRuleContexts(ValContext.class);
		}
		public ValContext val(int i) {
			return getRuleContext(ValContext.class,i);
		}
		public LvalContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_lval; }
	}

	public final LvalContext lval() throws RecognitionException {
		LvalContext _localctx = new LvalContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_lval);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(77);
			val();
			setState(82);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__9) {
				{
				{
				setState(78);
				match(T__9);
				setState(79);
				val();
				}
				}
				setState(84);
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
		enterRule(_localctx, 12, RULE_pre);
		try {
			setState(87);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PVAR:
				_localctx = new VarContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(85);
				match(PVAR);
				}
				break;
			case PCONST:
				_localctx = new ConstContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(86);
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
		enterRule(_localctx, 14, RULE_type);
		try {
			setState(93);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case PINT:
				_localctx = new PintContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(89);
				match(PINT);
				}
				break;
			case PFLOAT:
				_localctx = new PfloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(90);
				match(PFLOAT);
				}
				break;
			case PBOOL:
				_localctx = new PbooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(91);
				match(PBOOL);
				}
				break;
			case PSTRING:
				_localctx = new PstringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(92);
				match(PSTRING);
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
	public static class ValContext extends ParserRuleContext {
		public ValContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_val; }
	 
		public ValContext() { }
		public void copyFrom(ValContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilContext extends ValContext {
		public TerminalNode NIL() { return getToken(GrammarParser.NIL, 0); }
		public NilContext(ValContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatContext extends ValContext {
		public TerminalNode FLOAT() { return getToken(GrammarParser.FLOAT, 0); }
		public FloatContext(ValContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NumContext extends ValContext {
		public TerminalNode NUM() { return getToken(GrammarParser.NUM, 0); }
		public NumContext(ValContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StringContext extends ValContext {
		public TerminalNode STRING() { return getToken(GrammarParser.STRING, 0); }
		public StringContext(ValContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BooleContext extends ValContext {
		public TerminalNode BOOLE() { return getToken(GrammarParser.BOOLE, 0); }
		public BooleContext(ValContext ctx) { copyFrom(ctx); }
	}

	public final ValContext val() throws RecognitionException {
		ValContext _localctx = new ValContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_val);
		try {
			setState(100);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case NUM:
				_localctx = new NumContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(95);
				match(NUM);
				}
				break;
			case FLOAT:
				_localctx = new FloatContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(96);
				match(FLOAT);
				}
				break;
			case BOOLE:
				_localctx = new BooleContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(97);
				match(BOOLE);
				}
				break;
			case STRING:
				_localctx = new StringContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(98);
				match(STRING);
				}
				break;
			case NIL:
				_localctx = new NilContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(99);
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

	public static final String _serializedATN =
		"\u0004\u0001\u001bg\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0001\u0000\u0001\u0000\u0001\u0000\u0001\u0000\u0001\u0000"+
		"\u0001\u0000\u0005\u0000\u0019\b\u0000\n\u0000\f\u0000\u001c\t\u0000\u0001"+
		"\u0000\u0001\u0000\u0001\u0000\u0001\u0001\u0001\u0001\u0003\u0001#\b"+
		"\u0001\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001"+
		"\u0002\u0001\u0002\u0001\u0002\u0003\u00023\b\u0002\u0001\u0003\u0001"+
		"\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001"+
		"\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0003\u0001"+
		"\u0003\u0001\u0003\u0003\u0003D\b\u0003\u0001\u0004\u0001\u0004\u0001"+
		"\u0004\u0005\u0004I\b\u0004\n\u0004\f\u0004L\t\u0004\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0005\u0005Q\b\u0005\n\u0005\f\u0005T\t\u0005\u0001"+
		"\u0006\u0001\u0006\u0003\u0006X\b\u0006\u0001\u0007\u0001\u0007\u0001"+
		"\u0007\u0001\u0007\u0003\u0007^\b\u0007\u0001\b\u0001\b\u0001\b\u0001"+
		"\b\u0001\b\u0003\be\b\b\u0001\b\u0000\u0000\t\u0000\u0002\u0004\u0006"+
		"\b\n\f\u000e\u0010\u0000\u0000o\u0000\u0012\u0001\u0000\u0000\u0000\u0002"+
		"\"\u0001\u0000\u0000\u0000\u00042\u0001\u0000\u0000\u0000\u0006C\u0001"+
		"\u0000\u0000\u0000\bE\u0001\u0000\u0000\u0000\nM\u0001\u0000\u0000\u0000"+
		"\fW\u0001\u0000\u0000\u0000\u000e]\u0001\u0000\u0000\u0000\u0010d\u0001"+
		"\u0000\u0000\u0000\u0012\u0013\u0005\u000b\u0000\u0000\u0013\u0014\u0005"+
		"\f\u0000\u0000\u0014\u0015\u0005\u0001\u0000\u0000\u0015\u0016\u0005\u0002"+
		"\u0000\u0000\u0016\u001a\u0005\u0003\u0000\u0000\u0017\u0019\u0003\u0002"+
		"\u0001\u0000\u0018\u0017\u0001\u0000\u0000\u0000\u0019\u001c\u0001\u0000"+
		"\u0000\u0000\u001a\u0018\u0001\u0000\u0000\u0000\u001a\u001b\u0001\u0000"+
		"\u0000\u0000\u001b\u001d\u0001\u0000\u0000\u0000\u001c\u001a\u0001\u0000"+
		"\u0000\u0000\u001d\u001e\u0005\u0004\u0000\u0000\u001e\u001f\u0005\u0000"+
		"\u0000\u0001\u001f\u0001\u0001\u0000\u0000\u0000 #\u0003\u0004\u0002\u0000"+
		"!#\u0003\u0006\u0003\u0000\" \u0001\u0000\u0000\u0000\"!\u0001\u0000\u0000"+
		"\u0000#\u0003\u0001\u0000\u0000\u0000$%\u0003\f\u0006\u0000%&\u0003\b"+
		"\u0004\u0000&\'\u0003\u000e\u0007\u0000\'(\u0005\u0005\u0000\u0000()\u0003"+
		"\n\u0005\u0000)3\u0001\u0000\u0000\u0000*+\u0003\f\u0006\u0000+,\u0003"+
		"\b\u0004\u0000,-\u0003\u000e\u0007\u0000-3\u0001\u0000\u0000\u0000./\u0003"+
		"\b\u0004\u0000/0\u0005\u0005\u0000\u000001\u0003\n\u0005\u000013\u0001"+
		"\u0000\u0000\u00002$\u0001\u0000\u0000\u00002*\u0001\u0000\u0000\u0000"+
		"2.\u0001\u0000\u0000\u00003\u0005\u0001\u0000\u0000\u000045\u0005\u0018"+
		"\u0000\u000056\u0005\u0005\u0000\u00006D\u0003\u0010\b\u000078\u0005\u0018"+
		"\u0000\u000089\u0005\u0006\u0000\u00009D\u0003\u0010\b\u0000:;\u0005\u0018"+
		"\u0000\u0000;<\u0005\u0007\u0000\u0000<D\u0003\u0010\b\u0000=>\u0005\u0018"+
		"\u0000\u0000>?\u0005\b\u0000\u0000?D\u0003\u0010\b\u0000@A\u0005\u0018"+
		"\u0000\u0000AB\u0005\t\u0000\u0000BD\u0003\u0010\b\u0000C4\u0001\u0000"+
		"\u0000\u0000C7\u0001\u0000\u0000\u0000C:\u0001\u0000\u0000\u0000C=\u0001"+
		"\u0000\u0000\u0000C@\u0001\u0000\u0000\u0000D\u0007\u0001\u0000\u0000"+
		"\u0000EJ\u0005\u0018\u0000\u0000FG\u0005\n\u0000\u0000GI\u0005\u0018\u0000"+
		"\u0000HF\u0001\u0000\u0000\u0000IL\u0001\u0000\u0000\u0000JH\u0001\u0000"+
		"\u0000\u0000JK\u0001\u0000\u0000\u0000K\t\u0001\u0000\u0000\u0000LJ\u0001"+
		"\u0000\u0000\u0000MR\u0003\u0010\b\u0000NO\u0005\n\u0000\u0000OQ\u0003"+
		"\u0010\b\u0000PN\u0001\u0000\u0000\u0000QT\u0001\u0000\u0000\u0000RP\u0001"+
		"\u0000\u0000\u0000RS\u0001\u0000\u0000\u0000S\u000b\u0001\u0000\u0000"+
		"\u0000TR\u0001\u0000\u0000\u0000UX\u0005\r\u0000\u0000VX\u0005\u000e\u0000"+
		"\u0000WU\u0001\u0000\u0000\u0000WV\u0001\u0000\u0000\u0000X\r\u0001\u0000"+
		"\u0000\u0000Y^\u0005\u000f\u0000\u0000Z^\u0005\u0010\u0000\u0000[^\u0005"+
		"\u0011\u0000\u0000\\^\u0005\u0012\u0000\u0000]Y\u0001\u0000\u0000\u0000"+
		"]Z\u0001\u0000\u0000\u0000][\u0001\u0000\u0000\u0000]\\\u0001\u0000\u0000"+
		"\u0000^\u000f\u0001\u0000\u0000\u0000_e\u0005\u0013\u0000\u0000`e\u0005"+
		"\u0014\u0000\u0000ae\u0005\u0016\u0000\u0000be\u0005\u0017\u0000\u0000"+
		"ce\u0005\u0015\u0000\u0000d_\u0001\u0000\u0000\u0000d`\u0001\u0000\u0000"+
		"\u0000da\u0001\u0000\u0000\u0000db\u0001\u0000\u0000\u0000dc\u0001\u0000"+
		"\u0000\u0000e\u0011\u0001\u0000\u0000\u0000\t\u001a\"2CJRW]d";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}