# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions »*

**Layer** : 211

```tl
messages.availableReactions#768e3aad hash:int reactions:Vector<AvailableReaction> = messages.AvailableReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>reactions</mark> | [`Vector<AvailableReaction>`](type/AvailableReaction) | Animations and metadata associated with message reactions » |

---

## Type

[messages.AvailableReactions](type/messages.AvailableReactions)

---

## Example

```php
$messagesAvailableReactions = $client->messages->availableReactions(
	hash : 71,
	reactions : array(
		$client->availableReaction(
			inactive : true,
			premium : true,
			reaction : 'LlcIf3idgCov0UpW',
			title : 'ugHoSAXFxsiKvpQr',
			static_icon : $client->documentEmpty(
				id : -2206665362436220902,
			),
			appear_animation : $client->documentEmpty(
				id : -5834847679976007406,
			),
			select_animation : $client->documentEmpty(
				id : 5000123316294122573,
			),
			activate_animation : $client->documentEmpty(
				id : -2668772094610411721,
			),
			effect_animation : $client->documentEmpty(
				id : -6595845702383711707,
			),
			around_animation : $client->documentEmpty(
				id : 3555403237462058741,
			),
			center_icon : $client->documentEmpty(
				id : 6826641303657613796,
			),
		),
	),
);
```