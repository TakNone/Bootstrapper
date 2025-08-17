# messages.BotResults

**Description** : *Result of a query to an inline bot*

**Layer** : 211

```tl
messages.botResults#e021f2f6 flags:# gallery:flags.0?true query_id:long next_offset:flags.1?string switch_pm:flags.2?InlineBotSwitchPM switch_webview:flags.3?InlineBotWebView results:Vector<BotInlineResult> cache_time:int users:Vector<User> = messages.BotResults;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.botResults**](constructor/messages.botResults) | Result of a query to an inline bot |