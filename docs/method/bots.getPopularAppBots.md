# bots.getPopularAppBots

**Description** : *Fetch popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 214

```tl
bots.getPopularAppBots#c2510192 offset:string limit:int = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, initially an empty string, then re-use the next_offset returned by the previous query |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->getPopularAppBots(
	offset : 'AWFGEU6QSq1pXhzO',
	limit : 26,
);
```