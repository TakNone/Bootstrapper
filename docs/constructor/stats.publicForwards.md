# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 214

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>forwards</mark> | [`Vector<PublicForward>`](type/PublicForward) | Info about the forwards of a story |
| **next_offset** | [`flags.0?string`](type/string) | Offset used for pagination |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stats.PublicForwards](type/stats.PublicForwards)

---

## Example

```php
$statsPublicForwards = $client->stats->publicForwards(
	count : 41,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(...),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : 6312299830636450884,
			),
			story : $client->storyItemDeleted(
				id : 29,
			),
		),
	),
	next_offset : 'mziuv4rXh2JSlyRo',
	chats : array(
		$client->chatEmpty(
			id : -7066255543980457266,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6366611545448721538,
			title : 'mZLvd3qnW4HC80DG',
			photo : $client->chatPhotoEmpty(),
			participants_count : 59,
			date : 89,
			version : 43,
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
				until_date : 82,
			),
		),
		$client->chatForbidden(
			id : -8903918780066314025,
			title : 'WdNk0F1IMbzf3RHh',
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
			id : -6230092564140045738,
			access_hash : -2954572634615779336,
			title : 'fDJ1Zxgpvis46HBE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dMt1O90xIFGLpNQ8',
					reason : 'tnpdkDQYsgoPOH2A',
					text : 'Cb1JmlarvuZwQiz7',
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
				until_date : 57,
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
				until_date : 95,
			),
			participants_count : 20,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -783019002052389928,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 6806597835561297628,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 40,
			subscription_until_date : 73,
			bot_verification_icon : 8139932177820771601,
			send_paid_messages_stars : -5298981195780384857,
			linked_monoforum_id : -6367262915693230415,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8786307491034143423,
			access_hash : -6275230200231722865,
			title : 'EJ8AGwBcVmu1WrCt',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8666584309526900395,
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
			id : -4204476141210163699,
			access_hash : 8376224667228615395,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SWkTY6Ed82jl7Hfh',
					reason : 'kyFtIaTLA8UWDu0j',
					text : 'jMiFbaBAh17oUgDT',
				),
			),
			bot_inline_placeholder : 'R9qG4N7Pdo81klVp',
			lang_code : 'IWGc0OJ4p6CnFDZP',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 96,
			color : $client->peerColor(
				color : 19,
				background_emoji_id : -3471341840273622651,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -2232516616136825532,
			),
			bot_active_users : 51,
			bot_verification_icon : -4237703504882704333,
			send_paid_messages_stars : -8532329686782560942,
		),
	),
);
```