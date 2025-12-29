# stories.storyViewsList

**Description** : *Reaction and view counters for a story*

**Layer** : 218

```tl
stories.storyViewsList#59d78fc5 flags:# count:int views_count:int forwards_count:int reactions_count:int views:Vector<StoryView> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryViewsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results that can be fetched |
| <mark>views_count</mark> | [`int`](type/int) | Total number of story views |
| <mark>forwards_count</mark> | [`int`](type/int) | Total number of story forwards/reposts |
| <mark>reactions_count</mark> | [`int`](type/int) | Number of reactions that were added to the story |
| <mark>views</mark> | [`Vector<StoryView>`](type/StoryView) | Story view date and reaction information |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |

---

## Type

[stories.StoryViewsList](type/stories.StoryViewsList)

---

## Example

```php
$storiesStoryViewsList = $client->stories->storyViewsList(
	count : 74,
	views_count : 70,
	forwards_count : 5,
	reactions_count : 75,
	views : array(
		$client->storyView(
			blocked : true,
			blocked_my_stories_from : true,
			user_id : 8183505644696727842,
			date : 46,
			reaction : $client->reactionEmpty(),
		),
		$client->storyViewPublicForward(
			blocked : true,
			blocked_my_stories_from : true,
			message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(
					user_id : 7821615312146784741,
				),
			),
		),
		$client->storyViewPublicRepost(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6911607853688444409,
			),
			story : $client->storyItemDeleted(
				id : 45,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2891881379912922468,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8336538331550458531,
			title : 'XK98LoyIcJj0GPxA',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 1,
			version : 31,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 88,
			),
		),
		$client->chatForbidden(
			id : 5581609071202002982,
			title : 'smq9Du4bw6cLeyWZ',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -4831099021819266510,
			access_hash : -7371387025394094383,
			title : 'GCQd1tXISfie8Bvj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jVOgyeQXYBFCtaDH',
					reason : 'XyLkACbWNd0hzKwP',
					text : 'jaHbLY9TeVozgdSU',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 17,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 22,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 18,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -1799060140175593872,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : 8422511036581519654,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 5,
			subscription_until_date : 94,
			bot_verification_icon : -8233783135711611528,
			send_paid_messages_stars : -8438251438377450881,
			linked_monoforum_id : -1889079218479939389,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5046812504342396647,
			access_hash : -7760103450222603433,
			title : 'yQIbsCrdHEuJAv14',
			until_date : 24,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2917957687782217410,
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
			id : 8423971794135068218,
			access_hash : -8784436278781629281,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QHu6j4I9vmkbBqyL',
					reason : 'ax9eQtpz3RVL2Byw',
					text : 'z8ADbc4kEuCQUf12',
				),
			),
			bot_inline_placeholder : 'ifOtxCQs2ern1yjb',
			lang_code : 'w1VTFnZ8P0MmSG3i',
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
				max_id : 35,
			),
			color : $client->peerColor(
				color : 52,
				background_emoji_id : 1322250288467542404,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : 6906212857708624507,
			),
			bot_active_users : 71,
			bot_verification_icon : -2249459391412635930,
			send_paid_messages_stars : -8404673390385580391,
		),
	),
	next_offset : 'T6IUfsj19AZ70r2a',
);
```