# inputWalletCardSticker

**Layer** : 233

```tl
inputWalletCardSticker#57df45a7 coordinates:MediaAreaCoordinates nft_address:string = InputWalletCardSticker;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>coordinates</mark> | [`MediaAreaCoordinates`](type/MediaAreaCoordinates) | NOTHING |
| <mark>nft_address</mark> | [`string`](type/string) | NOTHING |

---

## Type

[InputWalletCardSticker](type/InputWalletCardSticker)

---

## Example

```php
$inputWalletCardSticker = $client->inputWalletCardSticker(
	coordinates : $client->mediaAreaCoordinates(
		x : -799090.041015625,
		y : -1287488.4248046875,
		w : 359835.384765625,
		h : 33595.4140625,
		rotation : 2018268.4462890625,
		radius : 773024.8603515625,
	),
	nft_address : 'j2Xw1WzPF6slB4cu',
);
```