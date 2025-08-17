# chatReactionsAll

**Description** : *All reactions or all non-custom reactions are allowed*

**Layer** : 211

```tl
chatReactionsAll#52928bca flags:# allow_custom:flags.0?true = ChatReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **allow_custom** | [`flags.0?true`](type/true) | Whether to allow custom reactions |

---

## Type

[ChatReactions](type/ChatReactions)

---

## Example

```php
$chatReactions = $client->chatReactionsAll(
	allow_custom : true,
);
```