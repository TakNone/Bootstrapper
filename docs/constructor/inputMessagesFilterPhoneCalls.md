# inputMessagesFilterPhoneCalls

**Description** : *Return only phone calls*

**Layer** : 211

```tl
inputMessagesFilterPhoneCalls#80c99768 flags:# missed:flags.0?true = MessagesFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **missed** | [`flags.0?true`](type/true) | Return only missed phone calls |

---

## Type

[MessagesFilter](type/MessagesFilter)

---

## Example

```php
$messagesFilter = $client->inputMessagesFilterPhoneCalls(
	missed : true,
);
```