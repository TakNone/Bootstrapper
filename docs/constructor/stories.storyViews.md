# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 214

```tl
stories.storyViews#de9eed1d views:Vector<StoryViews> users:Vector<User> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<StoryViews>`](type/StoryViews) | View date and reaction information of multiple stories |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.StoryViews](type/stories.StoryViews)

---

## Example

```php
$storiesStoryViews = $client->stories->storyViews(
	views : array(
		$client->storyViews(
			has_viewers : true,
			views_count : 29,
			forwards_count : 55,
			reactions : array(
				$client->reactionCount(
					chosen_order : 17,
					reaction : $client->reactionEmpty(...),
					count : 85,
				),
			),
			reactions_count : 94,
			recent_viewers : array(1266121519544608006),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2649183130688441083,
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
			id : -9027864364835733374,
			access_hash : 5876687157968633939,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '49MX2IfA1isKrR7l',
					reason : 'spcLxVyZNeIogSq8',
					text : 'QELZM6xyROJpH9nD',
				),
			),
			bot_inline_placeholder : '16aJYUdWvrSDRswL',
			lang_code : 'o7vlyZuL3N2q4VSE',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 37,
			color : $client->peerColor(
				color : 35,
				background_emoji_id : -8125170980051146467,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 2916962646442596231,
			),
			bot_active_users : 69,
			bot_verification_icon : -3007468595189379472,
			send_paid_messages_stars : 8927398034857738002,
		),
	),
);
```