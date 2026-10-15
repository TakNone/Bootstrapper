# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 229

```tl
photos.photo#20212ca8 photo:Photo users:Vector<User> = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photo</mark> | [`Photo`](type/Photo) | Photo |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[photos.Photo](type/photos.Photo)

---

## Example

```php
$photosPhoto = $client->photos->photo(
	photo : $client->photoEmpty(
		id : 2424164633727484727,
	),
	users : array(
		$client->userEmpty(
			id : -7237844329910331104,
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
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 2798080162833489785,
			access_hash : 8189089146373342275,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'f1PGBwYqr48T2JAe',
					reason : 'N2lCMfupGEkJOH91',
					text : 'XFWLyZc6adVSNOgE',
				),
			),
			bot_inline_placeholder : 'jfAxR3vELVT9qSaC',
			lang_code : 'iM8xNcpf1GOFYtEe',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 37,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -2847645477436398785,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 3256438997787129419,
			),
			bot_active_users : 85,
			bot_verification_icon : -369450852135375452,
			send_paid_messages_stars : 8078224504527356085,
			linked_community_id : 9010050104725282486,
		),
	),
);
```