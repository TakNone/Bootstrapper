# statsGroupTopInviter

**Description** : *Information about an active supergroup inviter*

**Layer** : 225

```tl
statsGroupTopInviter#535f779d user_id:long invitations:int = StatsGroupTopInviter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>invitations</mark> | [`int`](type/int) | Number of invitations for statistics period in consideration |

---

## Type

[StatsGroupTopInviter](type/StatsGroupTopInviter)

---

## Example

```php
$statsGroupTopInviter = $client->statsGroupTopInviter(
	user_id : 4037262531230138335,
	invitations : 5,
);
```