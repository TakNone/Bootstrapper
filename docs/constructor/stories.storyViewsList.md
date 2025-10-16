# stories.storyViewsList

**Description** : *Reaction and view counters for a story*

**Layer** : 216

```tl
stories.storyViewsList#59d78fc5 flags:# count:int views_count:int forwards_count:int reactions_count:int views:Vector<StoryView> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryViewsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 71,
	views_count : 62,
	forwards_count : 57,
	reactions_count : 56,
	views : array(
		$client->storyView(
			blocked : true,
			blocked_my_stories_from : true,
			user_id : 5402997374307025863,
			date : 4,
			reaction : $client->reactionEmpty(),
		),
		$client->storyViewPublicForward(
			blocked : true,
			blocked_my_stories_from : true,
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(...),
			),
		),
		$client->storyViewPublicRepost(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6031048863937908610,
			),
			story : $client->storyItemDeleted(
				id : 69,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8693580705153958041,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1068510616204940731,
			title : 'xbQyoMiXpudklRfw',
			photo : $client->chatPhotoEmpty(),
			participants_count : 46,
			date : 39,
			version : 45,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 54,
			),
		),
		$client->chatForbidden(
			id : 3660135211167348972,
			title : 'Af9Je512VpnqO0wd',
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
			id : -4786384682932983551,
			access_hash : 3652504826839337753,
			title : 'DkB4e2rYEOonINAU',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fMK7N3xdFltPVgZ4',
					reason : 'klQcAgF5f3iNYMm4',
					text : 'mbIhPsaUu3dWH8Ey',
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
				until_date : 24,
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
				until_date : 35,
			),
			participants_count : 73,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 53,
			color : $client->peerColor(
				color : 3,
				background_emoji_id : -3790238377333965988,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 5567119612157783301,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 97,
			subscription_until_date : 89,
			bot_verification_icon : 7987885981840453458,
			send_paid_messages_stars : -5536797522400588460,
			linked_monoforum_id : 4142224658212519613,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8884688359466684156,
			access_hash : 1035874109311355313,
			title : 'eWsbDiF6yu0ZHfUj',
			until_date : 63,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6604791700460433609,
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
			id : 8718875870075031900,
			access_hash : 5010508709431612885,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XYuZ0mcf7hGbViDO',
					reason : 'OVH4MNfGBaLrXiyk',
					text : '1kEoL8Rmb9zOPWiQ',
				),
			),
			bot_inline_placeholder : 'pIKBVnGfqQ9Hz2Uu',
			lang_code : 'MeDAzwjblE3tSCov',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 76,
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 3043261239108560380,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 3068445634015949457,
			),
			bot_active_users : 40,
			bot_verification_icon : 4944972017402632440,
			send_paid_messages_stars : 4830797403895825481,
		),
	),
	next_offset : 'no26kZGc4RmMSHwK',
);
```