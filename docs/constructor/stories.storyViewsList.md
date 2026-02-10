# stories.storyViewsList

**Description** : *Reaction and view counters for a story*

**Layer** : 222

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
	count : 4,
	views_count : 17,
	forwards_count : 29,
	reactions_count : 11,
	views : array(
		$client->storyView(
			blocked : true,
			blocked_my_stories_from : true,
			user_id : -4720791795577270914,
			date : 57,
			reaction : $client->reactionEmpty(),
		),
		$client->storyViewPublicForward(
			blocked : true,
			blocked_my_stories_from : true,
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(
					user_id : -3578115938606554610,
				),
			),
		),
		$client->storyViewPublicRepost(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -8005297623534660768,
			),
			story : $client->storyItemDeleted(
				id : 43,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4863496424504879191,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4133640073094845733,
			title : 'fyJR8EWbrat92pKm',
			photo : $client->chatPhotoEmpty(),
			participants_count : 34,
			date : 47,
			version : 26,
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
				until_date : 23,
			),
		),
		$client->chatForbidden(
			id : -8260745188524871716,
			title : 'LoFkAKTsS7pjrCq6',
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
			id : -4962049103281085156,
			access_hash : -6795581079227201555,
			title : 'ioJRbypO0Q83qAFB',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NlUcAbqpsWB6iDQP',
					reason : 'tG4ylLcT83poafbw',
					text : 'UXvDu0yAEaonMB42',
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
				until_date : 68,
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
				until_date : 7,
			),
			participants_count : 81,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 65,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -5874843143899875968,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 3751591196511015322,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 42,
			subscription_until_date : 75,
			bot_verification_icon : -7218105835130031774,
			send_paid_messages_stars : 6438880335950607292,
			linked_monoforum_id : 7475878127029670127,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -519513109243805681,
			access_hash : 7362403618782825959,
			title : 'i9ufQEkZwdy8jzxp',
			until_date : 33,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4662392420828892224,
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
			id : -8011613659560499895,
			access_hash : -8214935571754885443,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'W4OjuBswvNY5ePaR',
					reason : 'rxzTdVOP4gSuDHse',
					text : 'AxHFcruWQEvN8fbo',
				),
			),
			bot_inline_placeholder : 'y671MSho34VR8Xvs',
			lang_code : 'keciMzxUdb95ETJI',
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
				max_id : 84,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : 159455502970520344,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : 3386626168758325521,
			),
			bot_active_users : 80,
			bot_verification_icon : 7758761405901717249,
			send_paid_messages_stars : 2778896783857066155,
		),
	),
	next_offset : 'gXM4bVkvOqcTIo7f',
);
```