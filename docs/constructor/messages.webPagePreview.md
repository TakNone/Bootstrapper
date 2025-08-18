# messages.webPagePreview

**Layer** : 211

```tl
messages.webPagePreview#b53e8b21 media:MessageMedia users:Vector<User> = messages.WebPagePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>media</mark> | [`MessageMedia`](type/MessageMedia) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.WebPagePreview](type/messages.WebPagePreview)

---

## Example

```php
$messagesWebPagePreview = $client->messages->webPagePreview(
	media : $client->messageMediaEmpty(),
	users : array(
		$client->userEmpty(
			id : 5527114742494118861,
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
			id : 6225366557695219092,
			access_hash : -361247041230496896,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'akibI8wu6yKf4R3e',
					reason : '1D2BCpTKzf95ySYe',
					text : 'vJqQWGkrFUhCZ6AD',
				),
			),
			bot_inline_placeholder : 'yq4g6TEpKIsYna38',
			lang_code : 'lFgEq90J6NA5GQYS',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 46,
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 1989360234176332244,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : 1456110410835701590,
			),
			bot_active_users : 97,
			bot_verification_icon : -3674050369141348698,
			send_paid_messages_stars : -6369861284123689332,
		),
	),
);
```