# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 227

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 32,
	missing_peers : array(
		$client->peerUser(
			user_id : 4107371186269684899,
		),
		$client->peerChat(
			chat_id : 6851225074287824443,
		),
		$client->peerChannel(
			channel_id : 1958213762930529864,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : -2182113857462293658,
		),
		$client->peerChat(
			chat_id : 1991287611904286670,
		),
		$client->peerChannel(
			channel_id : 8463351517167351245,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8376137593216802440,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2895566668615357406,
			title : 'uwODYEAkWqvtjFaS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 58,
			date : 3,
			version : 35,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 86,
			),
		),
		$client->chatForbidden(
			id : 8138991314817384743,
			title : 'pbiNt6KATEB3oXyF',
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
			id : 4489879429250633140,
			access_hash : 6121834175906933371,
			title : '8m62g3ZYJcAzFlDP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 61,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CfSMHuUdQlY8kba9',
					reason : '1oAhFImYjPuOx9r0',
					text : '1OKiUGD5BVjYzwnl',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 19,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 35,
			),
			participants_count : 28,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 66,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : -8558603569635875290,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -8168344545723477068,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 13,
			bot_verification_icon : 8978265813542589255,
			send_paid_messages_stars : 507254068921210933,
			linked_monoforum_id : -6554450094353151217,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 9097881777283485954,
			access_hash : 5917265785316262405,
			title : 'YmMO3Z1PVNvuDRr0',
			until_date : 52,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2305015230107326700,
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
			id : -5083340797226466815,
			access_hash : -3558197478081722953,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PfS3ezyTD6wCpdOb',
					reason : 'UZFbwci9xpS8K0dY',
					text : 'XR3I6lSnCrO075TQ',
				),
			),
			bot_inline_placeholder : 'nGryMfg6HA4cP9SF',
			lang_code : 'BYAIlcPgbwj9qphv',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 3674016796283076861,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 2083210542362351565,
			),
			bot_active_users : 49,
			bot_verification_icon : 8182081831286119621,
			send_paid_messages_stars : -4661232426887509954,
		),
	),
);
```