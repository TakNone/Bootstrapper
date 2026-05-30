# statsGroupTopAdmin

**Description** : *Information about an active admin in a supergroup*

**Layer** : 225

```tl
statsGroupTopAdmin#d7584c87 user_id:long deleted:int kicked:int banned:int = StatsGroupTopAdmin;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>deleted</mark> | [`int`](type/int) | Number of deleted messages for statistics period in consideration |
| <mark>kicked</mark> | [`int`](type/int) | Number of kicked users for statistics period in consideration |
| <mark>banned</mark> | [`int`](type/int) | Number of banned users for statistics period in consideration |

---

## Type

[StatsGroupTopAdmin](type/StatsGroupTopAdmin)

---

## Example

```php
$statsGroupTopAdmin = $client->statsGroupTopAdmin(
	user_id : 7585513561600028360,
	deleted : 59,
	kicked : 91,
	banned : 63,
);
```