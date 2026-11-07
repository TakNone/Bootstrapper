# wallet.setCardStickers

**Layer** : 233

```tl
wallet.setCardStickers#68509ac flags:# stickers:Vector<InputWalletCardSticker> bg_nft_address:flags.0?string = wallet.Card;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>stickers</mark> | [`Vector<InputWalletCardSticker>`](type/InputWalletCardSticker) | NOTHING |
| **bg_nft_address** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[wallet.Card](type/wallet.Card)

---

## Example

```php
$walletCard = $client->wallet->setCardStickers(
	stickers : array(
		$client->inputWalletCardSticker(
			coordinates : $client->mediaAreaCoordinates(
				x : -46603.7333984375,
				y : 703358.875,
				w : -1498011.814453125,
				h : -1064304.5576171875,
				rotation : 1154160.673828125,
				radius : -1875929.8310546875,
			),
			nft_address : '6PbTUK4Ity5nXFwv',
		),
	),
	bg_nft_address : 'vR2FeD3dETOmVkMi',
);
```