# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 216

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
			views_count : 1,
			forwards_count : 97,
			reactions : array(
				$client->reactionCount(
					chosen_order : 42,
					reaction : $client->reactionEmpty(...),
					count : 15,
				),
			),
			reactions_count : 54,
			recent_viewers : array(4711484600719089001),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4563074297734854841,
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
			id : -3473313135348303854,
			access_hash : 7046696927469496585,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l9iORQYVvArnDcZb',
					reason : 'sqStTp8exC9NOiEc',
					text : 'uZtxA5OiIMmSV98J',
				),
			),
			bot_inline_placeholder : 'VCMtazYfBXyFmZpb',
			lang_code : 'IRjWv650VcQNABEw',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 97,
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 1092747196582357785,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -8528997047012283503,
			),
			bot_active_users : 31,
			bot_verification_icon : 7051959317856444538,
			send_paid_messages_stars : 5550958086925531854,
		),
	),
);
```