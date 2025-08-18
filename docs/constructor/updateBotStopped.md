# updateBotStopped

**Description** : *A bot was stopped or re\-started*

**Layer** : 211

```tl
updateBotStopped#c4870a49 user_id:long date:int stopped:Bool qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | The user ID |
| <mark>date</mark> | [`int`](type/int) | When did this action occur |
| <mark>stopped</mark> | [`Bool`](type/Bool) | Whether the bot was stopped or started |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotStopped(
	user_id : -8404724255212276915,
	date : 9,
	stopped : false,
	qts : 41,
);
```