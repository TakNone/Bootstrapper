# messages.chatInviteJoinResultOk

**Layer** : 227

```tl
messages.chatInviteJoinResultOk#445663a7 updates:Updates = messages.ChatInviteJoinResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Updates`](type/Updates) | NOTHING |

---

## Type

[messages.ChatInviteJoinResult](type/messages.ChatInviteJoinResult)

---

## Example

```php
$messagesChatInviteJoinResult = $client->messages->chatInviteJoinResultOk(
	updates : $client->updatesTooLong(),
);
```