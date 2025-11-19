# availableEffect

**Description** : *Represents a message effect &raquo;*

**Layer** : 218

```tl
availableEffect#93c3e27e flags:# premium_required:flags.2?true id:long emoticon:string static_icon_id:flags.0?long effect_sticker_id:long effect_animation_id:flags.1?long = AvailableEffect;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium_required** | [`flags.2?true`](type/true) | Whether a Premium subscription is required to use this effect |
| <mark>id</mark> | [`long`](type/long) | Unique effect ID |
| <mark>emoticon</mark> | [`string`](type/string) | Emoji corresponding to the effect, to be used as icon for the effect if static_icon_id is not set |
| **static_icon_id** | [`flags.0?long`](type/long) | ID of the document containing the static icon (WEBP) of the effect |
| <mark>effect_sticker_id</mark> | [`long`](type/long) | Contains the preview animation (TGS format »), used for the effect selection menu |
| **effect_animation_id** | [`flags.1?long`](type/long) | If set, contains the actual animated effect (TGS format »). If not set, the animated effect must be set equal to the premium animated sticker effect associated to the animated sticker specified in effect_sticker_id (always different from the preview animation, fetched thanks to the videoSize of type f as specified here ») |

---

## Type

[AvailableEffect](type/AvailableEffect)

---

## Example

```php
$availableEffect = $client->availableEffect(
	premium_required : true,
	id : 3031981467287585674,
	emoticon : 'u52TtRGJPN80C1dL',
	static_icon_id : 557264729090992746,
	effect_sticker_id : 8050441795436015266,
	effect_animation_id : -7467293237454168760,
);
```