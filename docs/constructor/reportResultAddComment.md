# reportResultAddComment

**Description** : *The user should enter an additional comment for the moderators, and then messages\.report must be re\-invoked, passing the comment to messages\.report\.message*

**Layer** : 218

```tl
reportResultAddComment#6f09ac31 flags:# optional:flags.0?true option:bytes = ReportResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **optional** | [`flags.0?true`](type/true) | Whether this step can be skipped by the user, passing an empty message to messages.report, or if a non-empty message is mandatory |
| <mark>option</mark> | [`bytes`](type/bytes) | The messages.report method must be re-invoked, passing this option to option |

---

## Type

[ReportResult](type/ReportResult)

---

## Example

```php
$reportResult = $client->reportResultAddComment(
	optional : true,
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```