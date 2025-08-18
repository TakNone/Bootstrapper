# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

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
	hash : 93,
	reactions : array(
		$client->availableReaction(
			inactive : true,
			premium : true,
			reaction : '5n1bAtNHsuP08UmI',
			title : 'P9w4YRaX3h7pHLgu',
			static_icon : $client->documentEmpty(
				id : -3486950746541407015,
			),
			appear_animation : $client->documentEmpty(
				id : 8730619069368344422,
			),
			select_animation : $client->documentEmpty(
				id : 6181957716436047022,
			),
			activate_animation : $client->documentEmpty(
				id : 316482055124787164,
			),
			effect_animation : $client->documentEmpty(
				id : -3076325070142489194,
			),
			around_animation : $client->documentEmpty(
				id : -1776787492426578360,
			),
			center_icon : $client->documentEmpty(
				id : -8141202237161697883,
			),
		),
	),
);
```