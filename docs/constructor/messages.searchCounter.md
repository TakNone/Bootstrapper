# messages.searchCounter

**Description** : *Indicates how many results would be found by a messages\.search call with the same parameters*

**Layer** : 211

```tl
messages.searchCounter#e844ebff flags:# inexact:flags.1?true filter:MessagesFilter count:int = messages.SearchCounter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inexact** | [`flags.1?true`](type/true) | If set, the results may be inexact |
| <mark>filter</mark> | [`MessagesFilter`](type/MessagesFilter) | Provided message filter |
| <mark>count</mark> | [`int`](type/int) | Number of results that were found server-side |

---

## Type

[messages.SearchCounter](type/messages.SearchCounter)

---

## Example

```php
$messagesSearchCounter = $client->messages->searchCounter(
	inexact : true,
	filter : $client->inputMessagesFilterEmpty(),
	count : 43,
);
```