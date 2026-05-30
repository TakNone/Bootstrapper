# stories.storyReactionsList

**Description** : *List of peers that reacted to or intercated with a specific story*

**Layer** : 222

```tl
stories.storyReactionsList#aa5f789c flags:# count:int reactions:Vector<StoryReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of reactions matching query |
| <mark>reactions</mark> | [`Vector<StoryReaction>`](type/StoryReaction) | List of peers that reacted to or interacted with a specific story |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | If set, indicates the next offset to use to load more results by invoking stories.getStoryReactionsList |

---

## Type

[stories.StoryReactionsList](type/stories.StoryReactionsList)

---

## Example

```php
$storiesStoryReactionsList = $client->stories->storyReactionsList(
	count : 32,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : 9077386686432295384,
			),
			date : 26,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : -7852265039916297789,
				),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : 682375012938005163,
			),
			story : $client->storyItemDeleted(
				id : 55,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3873149502867721301,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1655700916779812092,
			title : 'v1D6KmHhEkQrxMct',
			photo : $client->chatPhotoEmpty(),
			participants_count : 9,
			date : 67,
			version : 39,
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
				until_date : 3,
			),
		),
		$client->chatForbidden(
			id : 6469715227561374002,
			title : 'OuSKXfzvCJLkyx7V',
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
			id : -5946182643318319758,
			access_hash : -1079911922490139215,
			title : 'zZNh9xPMJOLsRIvE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eA6xb7XMlUTOjKtV',
					reason : 'DMUyFj8JPBOWA9l5',
					text : 'BVozsdRjGODqeanc',
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
				until_date : 22,
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
				until_date : 99,
			),
			participants_count : 80,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 28,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -5814153699767430102,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 1136659978524432882,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 18,
			subscription_until_date : 65,
			bot_verification_icon : -9138549573974608183,
			send_paid_messages_stars : 5523652466822063157,
			linked_monoforum_id : -7008387250969545579,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -1846700340330082476,
			access_hash : 3244364078540403744,
			title : '6zA8J95pENQLcHjh',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3603924994482124909,
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
			id : -1426108765097360909,
			access_hash : 465690351898348076,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'o9ZJuc4I1iMW2QyC',
					reason : 'tiBq6PyaLfUZehKu',
					text : 'EXdANi3oMG5xhaOF',
				),
			),
			bot_inline_placeholder : 'E7vwMBaDlVduh4xt',
			lang_code : 'XFVUGi4pTkqjASBe',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -6622934063779136614,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -2025952734081690497,
			),
			bot_active_users : 31,
			bot_verification_icon : 2682318856443127778,
			send_paid_messages_stars : 294528308235269144,
		),
	),
	next_offset : 'pvSXVRhFIuMj12lk',
);
```