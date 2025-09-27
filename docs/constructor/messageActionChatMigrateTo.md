# messageActionChatMigrateTo

**Description** : *Indicates the chat was migrated to the specified supergroup*

**Layer** : 216

```tl
messageActionChatMigrateTo#e1037f92 channel_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | The supergroup it was migrated to |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChatMigrateTo(
	channel_id : -3919750553938187527,
);
```