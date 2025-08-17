# ReportResult

**Description** : *Represents a report menu or result*

**Layer** : 211

```tl
reportResultChooseOption#f0e4e0b6 title:string options:Vector<MessageReportOption> = ReportResult;
reportResultAddComment#6f09ac31 flags:# optional:flags.0?true option:bytes = ReportResult;
reportResultReported#8db33c4b = ReportResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**reportResultChooseOption**](constructor/reportResultChooseOption) | The user must choose one of the following options, and then messages.report must be re-invoked, passing the option's option identifier to messages.report.option |
| [**reportResultAddComment**](constructor/reportResultAddComment) | The user should enter an additional comment for the moderators, and then messages.report must be re-invoked, passing the comment to messages.report.message |
| [**reportResultReported**](constructor/reportResultReported) | The report was sent successfully, no further actions are required |