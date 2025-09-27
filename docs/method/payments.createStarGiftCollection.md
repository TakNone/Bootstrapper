# payments.createStarGiftCollection

**Layer** : 214

```tl
payments.createStarGiftCollection#1f4a0e87 peer:InputPeer title:string stargift:Vector<InputSavedStarGift> = StarGiftCollection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |

---

## Result

[StarGiftCollection](type/StarGiftCollection)

---

## Example

```php
$starGiftCollection = $client->payments->createStarGiftCollection(
	peer : $client->inputPeerEmpty(),
	title : 'oh30bauPcrDZg6em',
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 94,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -1202510863262161079,
		),
		$client->inputSavedStarGiftSlug(
			slug : '924bJRySsNVrljDw',
		),
	),
);
```