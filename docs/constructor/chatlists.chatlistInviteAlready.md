# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 218

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
	filter_id : 88,
	missing_peers : array(
		$client->peerUser(
			user_id : -1683522281327055491,
		),
		$client->peerChat(
			chat_id : 6948613346786059914,
		),
		$client->peerChannel(
			channel_id : 8149596229736827447,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : -1206057611528010107,
		),
		$client->peerChat(
			chat_id : -4753209535510738350,
		),
		$client->peerChannel(
			channel_id : -6983867218140961927,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8503896059536430110,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2369676283264143815,
			title : 'iA8PvN2nXgLYV6ZD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 97,
			date : 4,
			version : 14,
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
				until_date : 66,
			),
		),
		$client->chatForbidden(
			id : 4729315901817064438,
			title : 'Pmo9fkETNOxdUwvc',
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
			id : -7320569343405461737,
			access_hash : -9043447998701243445,
			title : 'hoC45t8qeL7k3Ylw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rPgfNCq2McVzhyZT',
					reason : 'QuEXM9eGKwIOPLhS',
					text : 'FPLAaGEqtd9hn5zS',
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
				until_date : 89,
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
				until_date : 15,
			),
			participants_count : 99,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 100,
			),
			color : $client->peerColor(
				color : 3,
				background_emoji_id : -5515372033089662735,
			),
			profile_color : $client->peerColor(
				color : 72,
				background_emoji_id : -4861065466912729057,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 68,
			subscription_until_date : 78,
			bot_verification_icon : -2288573203436794947,
			send_paid_messages_stars : -5808443411508346145,
			linked_monoforum_id : 8494904959924799766,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -9039588686883540396,
			access_hash : -6495243861134968355,
			title : 'AgCDNTVHo13v6E5q',
			until_date : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4236881629455713773,
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
			id : -1461888996660913866,
			access_hash : -1881480184553851180,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cLo2g97N0OAXMher',
					reason : 'L2Rq8moDF3Se7kaG',
					text : 'K2ocwhMnz45SFVrl',
				),
			),
			bot_inline_placeholder : 'GfIxCp5BoqeEbltT',
			lang_code : 'DkiF3cfs6G7vlUW8',
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
				color : 10,
				background_emoji_id : 2879287331944670358,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : -2903569306793845728,
			),
			bot_active_users : 84,
			bot_verification_icon : -4709260606966820421,
			send_paid_messages_stars : -1809652366886535755,
		),
	),
);
```