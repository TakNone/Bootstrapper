# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 233

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
		id : -8009007704883418458,
	),
	users : array(
		$client->userEmpty(
			id : 2616462298377275249,
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
			bot_forum_sidebar : true,
			id : 7996742813780757365,
			access_hash : 2215869272209250775,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LgFvnlS3XipH1qyu',
					reason : 'NQD5CZ62dloGuthw',
					text : '6btVRIKrzSTk2svL',
				),
			),
			bot_inline_placeholder : '5l7QjO1v98MuJndX',
			lang_code : 'G2zdb7FjfaATECrs',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 94,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : -9011053984502473308,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : 1097987875282247894,
			),
			bot_active_users : 86,
			bot_verification_icon : -469484635320458291,
			send_paid_messages_stars : 5676038367842096331,
			linked_community_id : -4926796824927030469,
		),
	),
);
```