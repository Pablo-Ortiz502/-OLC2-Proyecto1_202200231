<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.0
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GrammarParser}.
 */
interface GrammarVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GrammarParser::s()}.
	 *
	 * @param Context\SContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitS(Context\SContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::program()}.
	 *
	 * @param Context\ProgramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProgram(Context\ProgramContext $context);

	/**
	 * Visit a parse tree produced by the `MultFunc` labeled alternative
	 * in {@see GrammarParser::functiondec()}.
	 *
	 * @param Context\MultFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultFunc(Context\MultFuncContext $context);

	/**
	 * Visit a parse tree produced by the `SimpleFunc` labeled alternative
	 * in {@see GrammarParser::functiondec()}.
	 *
	 * @param Context\SimpleFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSimpleFunc(Context\SimpleFuncContext $context);

	/**
	 * Visit a parse tree produced by the `method` labeled alternative
	 * in {@see GrammarParser::functiondec()}.
	 *
	 * @param Context\MethodContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMethod(Context\MethodContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::paramlist()}.
	 *
	 * @param Context\ParamlistContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParamlist(Context\ParamlistContext $context);

	/**
	 * Visit a parse tree produced by the `FuncArrayDec` labeled alternative
	 * in {@see GrammarParser::param()}.
	 *
	 * @param Context\FuncArrayDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncArrayDec(Context\FuncArrayDecContext $context);

	/**
	 * Visit a parse tree produced by the `FuncParamDec` labeled alternative
	 * in {@see GrammarParser::param()}.
	 *
	 * @param Context\FuncParamDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFuncParamDec(Context\FuncParamDecContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::typelist()}.
	 *
	 * @param Context\TypelistContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypelist(Context\TypelistContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::stmts()}.
	 *
	 * @param Context\StmtsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmts(Context\StmtsContext $context);

	/**
	 * Visit a parse tree produced by the `Println` labeled alternative
	 * in {@see GrammarParser::pri()}.
	 *
	 * @param Context\PrintlnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrintln(Context\PrintlnContext $context);

	/**
	 * Visit a parse tree produced by the `TypeO` labeled alternative
	 * in {@see GrammarParser::reserved()}.
	 *
	 * @param Context\TypeOContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeO(Context\TypeOContext $context);

	/**
	 * Visit a parse tree produced by the `NowFunc` labeled alternative
	 * in {@see GrammarParser::reserved()}.
	 *
	 * @param Context\NowFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNowFunc(Context\NowFuncContext $context);

	/**
	 * Visit a parse tree produced by the `LenFunc` labeled alternative
	 * in {@see GrammarParser::reserved()}.
	 *
	 * @param Context\LenFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLenFunc(Context\LenFuncContext $context);

	/**
	 * Visit a parse tree produced by the `SubS` labeled alternative
	 * in {@see GrammarParser::reserved()}.
	 *
	 * @param Context\SubSContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubS(Context\SubSContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::block()}.
	 *
	 * @param Context\BlockContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlock(Context\BlockContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::inst()}.
	 *
	 * @param Context\InstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInst(Context\InstContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::returnStmt()}.
	 *
	 * @param Context\ReturnStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnStmt(Context\ReturnStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::ifStmt()}.
	 *
	 * @param Context\IfStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStmt(Context\IfStmtContext $context);

	/**
	 * Visit a parse tree produced by the `LongFor` labeled alternative
	 * in {@see GrammarParser::forStmt()}.
	 *
	 * @param Context\LongForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLongFor(Context\LongForContext $context);

	/**
	 * Visit a parse tree produced by the `MidFor` labeled alternative
	 * in {@see GrammarParser::forStmt()}.
	 *
	 * @param Context\MidForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMidFor(Context\MidForContext $context);

	/**
	 * Visit a parse tree produced by the `ShortFor` labeled alternative
	 * in {@see GrammarParser::forStmt()}.
	 *
	 * @param Context\ShortForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortFor(Context\ShortForContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::switchStmt()}.
	 *
	 * @param Context\SwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStmt(Context\SwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::caseClause()}.
	 *
	 * @param Context\CaseClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCaseClause(Context\CaseClauseContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::defaultClause()}.
	 *
	 * @param Context\DefaultClauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefaultClause(Context\DefaultClauseContext $context);

	/**
	 * Visit a parse tree produced by the `LongArrayDec` labeled alternative
	 * in {@see GrammarParser::arraydec()}.
	 *
	 * @param Context\LongArrayDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLongArrayDec(Context\LongArrayDecContext $context);

	/**
	 * Visit a parse tree produced by the `ShortArrayDec` labeled alternative
	 * in {@see GrammarParser::arraydec()}.
	 *
	 * @param Context\ShortArrayDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortArrayDec(Context\ShortArrayDecContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::larrayexp()}.
	 *
	 * @param Context\LarrayexpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLarrayexp(Context\LarrayexpContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::larray()}.
	 *
	 * @param Context\LarrayContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLarray(Context\LarrayContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::arrayValue()}.
	 *
	 * @param Context\ArrayValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayValue(Context\ArrayValueContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::arrayElements()}.
	 *
	 * @param Context\ArrayElementsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayElements(Context\ArrayElementsContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::arrayElement()}.
	 *
	 * @param Context\ArrayElementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayElement(Context\ArrayElementContext $context);

	/**
	 * Visit a parse tree produced by the `Declv` labeled alternative
	 * in {@see GrammarParser::dec()}.
	 *
	 * @param Context\DeclvContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclv(Context\DeclvContext $context);

	/**
	 * Visit a parse tree produced by the `Decl` labeled alternative
	 * in {@see GrammarParser::dec()}.
	 *
	 * @param Context\DeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDecl(Context\DeclContext $context);

	/**
	 * Visit a parse tree produced by the `Sdec` labeled alternative
	 * in {@see GrammarParser::dec()}.
	 *
	 * @param Context\SdecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSdec(Context\SdecContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\ArrayAsigContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAsig(Context\ArrayAsigContext $context);

	/**
	 * Visit a parse tree produced by the `Asig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\AsigContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAsig(Context\AsigContext $context);

	/**
	 * Visit a parse tree produced by the `PlusAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\PlusAsigContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPlusAsig(Context\PlusAsigContext $context);

	/**
	 * Visit a parse tree produced by the `MinusAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\MinusAsigContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMinusAsig(Context\MinusAsigContext $context);

	/**
	 * Visit a parse tree produced by the `MultAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\MultAsigContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultAsig(Context\MultAsigContext $context);

	/**
	 * Visit a parse tree produced by the `DivAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\DivAsigContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDivAsig(Context\DivAsigContext $context);

	/**
	 * Visit a parse tree produced by the `Inde` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 *
	 * @param Context\IndeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInde(Context\IndeContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::incdec()}.
	 *
	 * @param Context\IncdecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncdec(Context\IncdecContext $context);

	/**
	 * Visit a parse tree produced by the `Not` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\NotContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNot(Context\NotContext $context);

	/**
	 * Visit a parse tree produced by the `MulDivMod` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\MulDivModContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulDivMod(Context\MulDivModContext $context);

	/**
	 * Visit a parse tree produced by the `re` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ReContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRe(Context\ReContext $context);

	/**
	 * Visit a parse tree produced by the `EqNotEq` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\EqNotEqContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEqNotEq(Context\EqNotEqContext $context);

	/**
	 * Visit a parse tree produced by the `AddSub` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\AddSubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddSub(Context\AddSubContext $context);

	/**
	 * Visit a parse tree produced by the `Parens` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ParensContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParens(Context\ParensContext $context);

	/**
	 * Visit a parse tree produced by the `va` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\VaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVa(Context\VaContext $context);

	/**
	 * Visit a parse tree produced by the `AndOr` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\AndOrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndOr(Context\AndOrContext $context);

	/**
	 * Visit a parse tree produced by the `MoreLessEq` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\MoreLessEqContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMoreLessEq(Context\MoreLessEqContext $context);

	/**
	 * Visit a parse tree produced by the `Num` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\NumContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNum(Context\NumContext $context);

	/**
	 * Visit a parse tree produced by the `Float` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\FloatContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFloat(Context\FloatContext $context);

	/**
	 * Visit a parse tree produced by the `Boole` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\BooleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoole(Context\BooleContext $context);

	/**
	 * Visit a parse tree produced by the `String` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\StringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitString(Context\StringContext $context);

	/**
	 * Visit a parse tree produced by the `Rune` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\RuneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRune(Context\RuneContext $context);

	/**
	 * Visit a parse tree produced by the `Nil` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\NilContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNil(Context\NilContext $context);

	/**
	 * Visit a parse tree produced by the `fc` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\FcContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFc(Context\FcContext $context);

	/**
	 * Visit a parse tree produced by the `NAV` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\NAVContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNAV(Context\NAVContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayVal` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\ArrayValContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayVal(Context\ArrayValContext $context);

	/**
	 * Visit a parse tree produced by the `IdExpr` labeled alternative
	 * in {@see GrammarParser::vals()}.
	 *
	 * @param Context\IdExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdExpr(Context\IdExprContext $context);

	/**
	 * Visit a parse tree produced by the `NewArrayVal` labeled alternative
	 * in {@see GrammarParser::arrVal()}.
	 *
	 * @param Context\NewArrayValContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNewArrayVal(Context\NewArrayValContext $context);

	/**
	 * Visit a parse tree produced by the `FunReturn` labeled alternative
	 * in {@see GrammarParser::funcCall()}.
	 *
	 * @param Context\FunReturnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunReturn(Context\FunReturnContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::lid()}.
	 *
	 * @param Context\LidContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLid(Context\LidContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::par()}.
	 *
	 * @param Context\ParContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPar(Context\ParContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::lvalpar()}.
	 *
	 * @param Context\LvalparContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLvalpar(Context\LvalparContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::lval()}.
	 *
	 * @param Context\LvalContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLval(Context\LvalContext $context);

	/**
	 * Visit a parse tree produced by the `Var` labeled alternative
	 * in {@see GrammarParser::pre()}.
	 *
	 * @param Context\VarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVar(Context\VarContext $context);

	/**
	 * Visit a parse tree produced by the `Const` labeled alternative
	 * in {@see GrammarParser::pre()}.
	 *
	 * @param Context\ConstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConst(Context\ConstContext $context);

	/**
	 * Visit a parse tree produced by the `Pint` labeled alternative
	 * in {@see GrammarParser::type()}.
	 *
	 * @param Context\PintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPint(Context\PintContext $context);

	/**
	 * Visit a parse tree produced by the `Pfloat` labeled alternative
	 * in {@see GrammarParser::type()}.
	 *
	 * @param Context\PfloatContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPfloat(Context\PfloatContext $context);

	/**
	 * Visit a parse tree produced by the `Pboole` labeled alternative
	 * in {@see GrammarParser::type()}.
	 *
	 * @param Context\PbooleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPboole(Context\PbooleContext $context);

	/**
	 * Visit a parse tree produced by the `Pstring` labeled alternative
	 * in {@see GrammarParser::type()}.
	 *
	 * @param Context\PstringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPstring(Context\PstringContext $context);

	/**
	 * Visit a parse tree produced by the `Prune` labeled alternative
	 * in {@see GrammarParser::type()}.
	 *
	 * @param Context\PruneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrune(Context\PruneContext $context);

	/**
	 * Visit a parse tree produced by the `funArrayType` labeled alternative
	 * in {@see GrammarParser::type()}.
	 *
	 * @param Context\FunArrayTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunArrayType(Context\FunArrayTypeContext $context);
}