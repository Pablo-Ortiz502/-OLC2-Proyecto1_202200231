<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.0
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GrammarParser}.
 */
interface GrammarListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GrammarParser::s()}.
	 * @param $context The parse tree.
	 */
	public function enterS(Context\SContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::s()}.
	 * @param $context The parse tree.
	 */
	public function exitS(Context\SContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::stmts()}.
	 * @param $context The parse tree.
	 */
	public function enterStmts(Context\StmtsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::stmts()}.
	 * @param $context The parse tree.
	 */
	public function exitStmts(Context\StmtsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::inst()}.
	 * @param $context The parse tree.
	 */
	public function enterInst(Context\InstContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::inst()}.
	 * @param $context The parse tree.
	 */
	public function exitInst(Context\InstContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `LongFor`
	 * labeled alternative in {@see GrammarParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLongFor(Context\LongForContext $context): void;
	/**
	 * Exit a parse tree produced by the `LongFor` labeled alternative
	 * in {@see GrammarParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLongFor(Context\LongForContext $context): void;
	/**
	 * Enter a parse tree produced by the `MidFor`
	 * labeled alternative in {@see GrammarParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMidFor(Context\MidForContext $context): void;
	/**
	 * Exit a parse tree produced by the `MidFor` labeled alternative
	 * in {@see GrammarParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMidFor(Context\MidForContext $context): void;
	/**
	 * Enter a parse tree produced by the `ShortFor`
	 * labeled alternative in {@see GrammarParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterShortFor(Context\ShortForContext $context): void;
	/**
	 * Exit a parse tree produced by the `ShortFor` labeled alternative
	 * in {@see GrammarParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitShortFor(Context\ShortForContext $context): void;
	/**
	 * Enter a parse tree produced by the `Declv`
	 * labeled alternative in {@see GrammarParser::dec()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclv(Context\DeclvContext $context): void;
	/**
	 * Exit a parse tree produced by the `Declv` labeled alternative
	 * in {@see GrammarParser::dec()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclv(Context\DeclvContext $context): void;
	/**
	 * Enter a parse tree produced by the `Decl`
	 * labeled alternative in {@see GrammarParser::dec()}.
	 * @param $context The parse tree.
	 */
	public function enterDecl(Context\DeclContext $context): void;
	/**
	 * Exit a parse tree produced by the `Decl` labeled alternative
	 * in {@see GrammarParser::dec()}.
	 * @param $context The parse tree.
	 */
	public function exitDecl(Context\DeclContext $context): void;
	/**
	 * Enter a parse tree produced by the `Sdec`
	 * labeled alternative in {@see GrammarParser::dec()}.
	 * @param $context The parse tree.
	 */
	public function enterSdec(Context\SdecContext $context): void;
	/**
	 * Exit a parse tree produced by the `Sdec` labeled alternative
	 * in {@see GrammarParser::dec()}.
	 * @param $context The parse tree.
	 */
	public function exitSdec(Context\SdecContext $context): void;
	/**
	 * Enter a parse tree produced by the `Asig`
	 * labeled alternative in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function enterAsig(Context\AsigContext $context): void;
	/**
	 * Exit a parse tree produced by the `Asig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function exitAsig(Context\AsigContext $context): void;
	/**
	 * Enter a parse tree produced by the `PlusAsig`
	 * labeled alternative in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function enterPlusAsig(Context\PlusAsigContext $context): void;
	/**
	 * Exit a parse tree produced by the `PlusAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function exitPlusAsig(Context\PlusAsigContext $context): void;
	/**
	 * Enter a parse tree produced by the `MinusAsig`
	 * labeled alternative in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function enterMinusAsig(Context\MinusAsigContext $context): void;
	/**
	 * Exit a parse tree produced by the `MinusAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function exitMinusAsig(Context\MinusAsigContext $context): void;
	/**
	 * Enter a parse tree produced by the `MultAsig`
	 * labeled alternative in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function enterMultAsig(Context\MultAsigContext $context): void;
	/**
	 * Exit a parse tree produced by the `MultAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function exitMultAsig(Context\MultAsigContext $context): void;
	/**
	 * Enter a parse tree produced by the `DivAsig`
	 * labeled alternative in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function enterDivAsig(Context\DivAsigContext $context): void;
	/**
	 * Exit a parse tree produced by the `DivAsig` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function exitDivAsig(Context\DivAsigContext $context): void;
	/**
	 * Enter a parse tree produced by the `Inde`
	 * labeled alternative in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function enterInde(Context\IndeContext $context): void;
	/**
	 * Exit a parse tree produced by the `Inde` labeled alternative
	 * in {@see GrammarParser::asg()}.
	 * @param $context The parse tree.
	 */
	public function exitInde(Context\IndeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::incdec()}.
	 * @param $context The parse tree.
	 */
	public function enterIncdec(Context\IncdecContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::incdec()}.
	 * @param $context The parse tree.
	 */
	public function exitIncdec(Context\IncdecContext $context): void;
	/**
	 * Enter a parse tree produced by the `IdExpr`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterIdExpr(Context\IdExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `IdExpr` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitIdExpr(Context\IdExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `AddSub`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAddSub(Context\AddSubContext $context): void;
	/**
	 * Exit a parse tree produced by the `AddSub` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAddSub(Context\AddSubContext $context): void;
	/**
	 * Enter a parse tree produced by the `Parens`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterParens(Context\ParensContext $context): void;
	/**
	 * Exit a parse tree produced by the `Parens` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitParens(Context\ParensContext $context): void;
	/**
	 * Enter a parse tree produced by the `Num`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterNum(Context\NumContext $context): void;
	/**
	 * Exit a parse tree produced by the `Num` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitNum(Context\NumContext $context): void;
	/**
	 * Enter a parse tree produced by the `String`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterString(Context\StringContext $context): void;
	/**
	 * Exit a parse tree produced by the `String` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitString(Context\StringContext $context): void;
	/**
	 * Enter a parse tree produced by the `Boole`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterBoole(Context\BooleContext $context): void;
	/**
	 * Exit a parse tree produced by the `Boole` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitBoole(Context\BooleContext $context): void;
	/**
	 * Enter a parse tree produced by the `MoreLessEq`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterMoreLessEq(Context\MoreLessEqContext $context): void;
	/**
	 * Exit a parse tree produced by the `MoreLessEq` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitMoreLessEq(Context\MoreLessEqContext $context): void;
	/**
	 * Enter a parse tree produced by the `Nil`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterNil(Context\NilContext $context): void;
	/**
	 * Exit a parse tree produced by the `Nil` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitNil(Context\NilContext $context): void;
	/**
	 * Enter a parse tree produced by the `Float`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterFloat(Context\FloatContext $context): void;
	/**
	 * Exit a parse tree produced by the `Float` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitFloat(Context\FloatContext $context): void;
	/**
	 * Enter a parse tree produced by the `MulDivMod`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterMulDivMod(Context\MulDivModContext $context): void;
	/**
	 * Exit a parse tree produced by the `MulDivMod` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitMulDivMod(Context\MulDivModContext $context): void;
	/**
	 * Enter a parse tree produced by the `EqNotEq`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterEqNotEq(Context\EqNotEqContext $context): void;
	/**
	 * Exit a parse tree produced by the `EqNotEq` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitEqNotEq(Context\EqNotEqContext $context): void;
	/**
	 * Enter a parse tree produced by the `Rune`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterRune(Context\RuneContext $context): void;
	/**
	 * Exit a parse tree produced by the `Rune` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitRune(Context\RuneContext $context): void;
	/**
	 * Enter a parse tree produced by the `AndOr`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAndOr(Context\AndOrContext $context): void;
	/**
	 * Exit a parse tree produced by the `AndOr` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAndOr(Context\AndOrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::lid()}.
	 * @param $context The parse tree.
	 */
	public function enterLid(Context\LidContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::lid()}.
	 * @param $context The parse tree.
	 */
	public function exitLid(Context\LidContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::lval()}.
	 * @param $context The parse tree.
	 */
	public function enterLval(Context\LvalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::lval()}.
	 * @param $context The parse tree.
	 */
	public function exitLval(Context\LvalContext $context): void;
	/**
	 * Enter a parse tree produced by the `Var`
	 * labeled alternative in {@see GrammarParser::pre()}.
	 * @param $context The parse tree.
	 */
	public function enterVar(Context\VarContext $context): void;
	/**
	 * Exit a parse tree produced by the `Var` labeled alternative
	 * in {@see GrammarParser::pre()}.
	 * @param $context The parse tree.
	 */
	public function exitVar(Context\VarContext $context): void;
	/**
	 * Enter a parse tree produced by the `Const`
	 * labeled alternative in {@see GrammarParser::pre()}.
	 * @param $context The parse tree.
	 */
	public function enterConst(Context\ConstContext $context): void;
	/**
	 * Exit a parse tree produced by the `Const` labeled alternative
	 * in {@see GrammarParser::pre()}.
	 * @param $context The parse tree.
	 */
	public function exitConst(Context\ConstContext $context): void;
	/**
	 * Enter a parse tree produced by the `Pint`
	 * labeled alternative in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterPint(Context\PintContext $context): void;
	/**
	 * Exit a parse tree produced by the `Pint` labeled alternative
	 * in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitPint(Context\PintContext $context): void;
	/**
	 * Enter a parse tree produced by the `Pfloat`
	 * labeled alternative in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterPfloat(Context\PfloatContext $context): void;
	/**
	 * Exit a parse tree produced by the `Pfloat` labeled alternative
	 * in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitPfloat(Context\PfloatContext $context): void;
	/**
	 * Enter a parse tree produced by the `Pboole`
	 * labeled alternative in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterPboole(Context\PbooleContext $context): void;
	/**
	 * Exit a parse tree produced by the `Pboole` labeled alternative
	 * in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitPboole(Context\PbooleContext $context): void;
	/**
	 * Enter a parse tree produced by the `Pstring`
	 * labeled alternative in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterPstring(Context\PstringContext $context): void;
	/**
	 * Exit a parse tree produced by the `Pstring` labeled alternative
	 * in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitPstring(Context\PstringContext $context): void;
	/**
	 * Enter a parse tree produced by the `Prune`
	 * labeled alternative in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterPrune(Context\PruneContext $context): void;
	/**
	 * Exit a parse tree produced by the `Prune` labeled alternative
	 * in {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitPrune(Context\PruneContext $context): void;
}