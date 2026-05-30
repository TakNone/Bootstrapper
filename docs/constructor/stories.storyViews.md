# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 222

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
			views_count : 32,
			forwards_count : 12,
			reactions : array(
				$client->reactionCount(
					chosen_order : 22,
					reaction : $client->reactionEmpty(),
					count : 1,
				),
			),
			reactions_count : 87,
			recent_viewers : array(5976013119789117188),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1222614189661897275,
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
			id : 312824849639313308,
			access_hash : -3705518335366042344,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7FfCKyRAMEBzd0uO',
					reason : 'p1Ng8euaoHTZs6k2',
					text : 'TtBFY3sick7D2d8m',
				),
			),
			bot_inline_placeholder : 'bTJxoPD9612jc7tK',
			lang_code : '3VSzGWBnm05YtIcg',
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
				max_id : 96,
			),
			color : $client->peerColor(
				color : 13,
				background_emoji_id : -507122517461687322,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : -4105250982634486209,
			),
			bot_active_users : 72,
			bot_verification_icon : 8836742449895097649,
			send_paid_messages_stars : -5671950388899560200,
		),
	),
);
```