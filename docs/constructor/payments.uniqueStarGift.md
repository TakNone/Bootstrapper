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
		id : 9211782023969547259,
		sticker : $client->documentEmpty(
			id : 3562785143073538658,
		),
		stars : -3932740476547480315,
		availability_remains : 38,
		availability_total : 47,
		availability_resale : 4310594657964155141,
		convert_stars : 1759988249653990838,
		first_sale_date : 4,
		last_sale_date : 72,
		upgrade_stars : -4907786398823136422,
		resell_min_stars : -3001180574126851392,
		title : 'BUjx64qrnG5WidSY',
		released_by : $client->peerUser(
			user_id : -4059155599199711014,
		),
		per_user_total : 83,
		per_user_remains : 58,
	),
	users : array(
		$client->userEmpty(
			id : -5584288070180600335,
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
			id : -8410854324063037377,
			access_hash : -1174522145771896469,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'opgx4dNwhPbqa2s5',
					reason : 'RKwMQY8sm3GcdL4Z',
					text : 'LbeHJzf41wx89R6I',
				),
			),
			bot_inline_placeholder : 'DRZb1G7YfOxonlI5',
			lang_code : 'DXlExasjHryfTKOi',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 39,
				background_emoji_id : 4317638250149103304,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 1180991026991114657,
			),
			bot_active_users : 56,
			bot_verification_icon : -2010527883612652464,
			send_paid_messages_stars : -5962127840335654581,
		),
	),
);
```