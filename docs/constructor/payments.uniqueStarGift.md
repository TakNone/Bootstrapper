# payments.uniqueStarGift

**Layer** : 211

```tl
payments.uniqueStarGift#caa2f60b gift:StarGift users:Vector<User> = payments.UniqueStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[payments.UniqueStarGift](type/payments.UniqueStarGift)

---

## Example

```php
$paymentsUniqueStarGift = $client->payments->uniqueStarGift(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : -3758900827988012839,
		sticker : $client->documentEmpty(
			id : 2940270498618132962,
		),
		stars : 6174483831087293665,
		availability_remains : 60,
		availability_total : 76,
		availability_resale : 1776119320635289446,
		convert_stars : -2268868850811084575,
		first_sale_date : 79,
		last_sale_date : 57,
		upgrade_stars : -372417559102767312,
		resell_min_stars : -6412927710413185597,
		title : 'W5zTSHeY2A3JuFLR',
		released_by : $client->peerUser(
			user_id : -6945075048499533559,
		),
		per_user_total : 58,
		per_user_remains : 67,
	),
	users : array(
		$client->userEmpty(
			id : -5076739445176122728,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : 7059899824123976085,
			access_hash : 771706990349551442,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PeKWyVSvEGlM4w2h',
					reason : 'KVyatFBAeJh7IdTY',
					text : 'EXnGAkDc6F79if41',
				),
			),
			bot_inline_placeholder : 'lSqDEGrZ6pkw0J7N',
			lang_code : 'xpKcaUbXD4fJq2sY',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 4,
			color : $client->peerColor(
				color : 6,
				background_emoji_id : 6916710959132708594,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : -6614168049558022631,
			),
			bot_active_users : 78,
			bot_verification_icon : -7907906875764843007,
			send_paid_messages_stars : 1933451225636381970,
		),
	),
);
```