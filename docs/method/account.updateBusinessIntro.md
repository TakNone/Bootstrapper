# account.updateBusinessIntro

**Description** : *Set or remove the Telegram Business introduction &raquo;*

**Layer** : 211

```tl
account.updateBusinessIntro#a614d034 flags:# intro:flags.0?InputBusinessIntro = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **intro** | [`flags.0?InputBusinessIntro`](type/InputBusinessIntro) | Telegram Business introduction, to remove it call the method without setting this flag |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updateBusinessIntro(
	intro : $client->inputBusinessIntro(
		title : 'Zlw9GjopT6DasnCU',
		description : 'iVW1xkqTXDwcKjmv',
		sticker : $client->inputDocumentEmpty(),
	),
);
```