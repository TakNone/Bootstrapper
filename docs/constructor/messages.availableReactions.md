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
			reaction : 'LtpRDCaM3HWyvqKh',
			title : 'tTeMl1ioWugyns7L',
			static_icon : $client->documentEmpty(
				id : 7576861296830723159,
			),
			appear_animation : $client->documentEmpty(
				id : 6409558600450159453,
			),
			select_animation : $client->documentEmpty(
				id : 6378874369509078534,
			),
			activate_animation : $client->documentEmpty(
				id : 687690331700027035,
			),
			effect_animation : $client->documentEmpty(
				id : -3094863870700932023,
			),
			around_animation : $client->documentEmpty(
				id : 4265667744078531828,
			),
			center_icon : $client->documentEmpty(
				id : -7490143571959459050,
			),
		),
	),
);
```