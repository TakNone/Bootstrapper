# statsGroupTopInviter

**Description** : *Information about an active supergroup inviter*

**Layer** : 218

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
	user_id : -70898667826759646,
	invitations : 66,
);
```