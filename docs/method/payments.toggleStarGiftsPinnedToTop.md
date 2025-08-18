# payments.toggleStarGiftsPinnedToTop

**Layer** : 211

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
			msg_id : 43,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -3142650781278327972,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'U67sjGlVfE8Y2phx',
		),
	),
);
```