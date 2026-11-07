# ReplyMarkup

**Description** : *Reply markup for bot and inline keyboards*

**Layer** : 233

```tl
replyKeyboardHide#a03e5b85 flags:# selective:flags.2?true = ReplyMarkup;
replyKeyboardForceReply#86b40b08 flags:# single_use:flags.1?true selective:flags.2?true placeholder:flags.3?string = ReplyMarkup;
replyKeyboardMarkup#85dd99d1 flags:# resize:flags.0?true single_use:flags.1?true selective:flags.2?true persistent:flags.4?true force_reply:flags.5?true rows:Vector<KeyboardButtonRow> placeholder:flags.3?string = ReplyMarkup;
replyInlineMarkup#b2b15770 flags:# force_reply:flags.5?true rows:Vector<KeyboardInlineButtonRow> = ReplyMarkup;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**replyKeyboardHide**](constructor/replyKeyboardHide) | Hide sent reply keyboard |
| [**replyKeyboardForceReply**](constructor/replyKeyboardForceReply) | Force the user to send a reply |
| [**replyKeyboardMarkup**](constructor/replyKeyboardMarkup) | Represents a reply keyboard |
| [**replyInlineMarkup**](constructor/replyInlineMarkup) | Represents an inline keyboard |