# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 222

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
		id : 2242891815707150575,
	),
	users : array(
		$client->userEmpty(
			id : -5608718590162871318,
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
			id : 4338721436588982696,
			access_hash : 685658105452767174,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hTapVg1RQNwsMAjf',
					reason : '4Ugw01QByhjxIJ56',
					text : 'qi5aOvR2KNTGdLX9',
				),
			),
			bot_inline_placeholder : 'xwZ4FGrYROJkjEVh',
			lang_code : 'cB3AI6f1XhpCniOj',
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
				max_id : 80,
			),
			color : $client->peerColor(
				color : 26,
				background_emoji_id : 4388661029969051140,
			),
			profile_color : $client->peerColor(
				color : 29,
				background_emoji_id : -8208549482878553980,
			),
			bot_active_users : 18,
			bot_verification_icon : 6505617201986804618,
			send_paid_messages_stars : 821643104004238117,
		),
	),
);
```