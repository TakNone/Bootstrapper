# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 227

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
	hash : 0,
	reactions : array(
		$client->availableReaction(
			inactive : true,
			premium : true,
			reaction : 'AgcXtrizvjJCxwle',
			title : '129w4ijdhNoQRTFt',
			static_icon : $client->documentEmpty(
				id : -2715748405214518756,
			),
			appear_animation : $client->documentEmpty(
				id : 5835470367542480205,
			),
			select_animation : $client->documentEmpty(
				id : -4456661918590719344,
			),
			activate_animation : $client->documentEmpty(
				id : -152804249382511153,
			),
			effect_animation : $client->documentEmpty(
				id : -5424392066701892186,
			),
			around_animation : $client->documentEmpty(
				id : -4393929035989182817,
			),
			center_icon : $client->documentEmpty(
				id : -1238269769190606456,
			),
		),
	),
);
```