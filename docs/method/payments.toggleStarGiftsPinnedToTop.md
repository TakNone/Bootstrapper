# payments.toggleStarGiftsPinnedToTop

**Layer** : 216

```tl
payments.toggleStarGiftsPinnedToTop#1513e7b0 peer:InputPeer stargift:Vector<InputSavedStarGift> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->toggleStarGiftsPinnedToTop(
	peer : $client->inputPeerEmpty(),
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 85,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 5301843816987670595,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'UV5isM1WHxDlIE8h',
		),
	),
);
```