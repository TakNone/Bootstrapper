# updates.channelDifference

**Description** : *The new updates*

**Layer** : 216

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 88,
	timeout : 60,
	new_messages : array(
		$client->messageEmpty(
			id : 18,
			peer_id : $client->peerUser(
				user_id : 3546806264796863796,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 95,
			from_id : $client->peerUser(
				user_id : -4201360238594028577,
			),
			from_boosts_applied : 66,
			peer_id : $client->peerUser(
				user_id : 8270560396487662537,
			),
			saved_peer_id : $client->peerUser(
				user_id : 7174460237201647818,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'XQg2uTazJlmcdKoI',
				date : 63,
				channel_post : 19,
				post_author : 'l78pQgFnSfHKemR6',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 3,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'JpXDVMyNITz5rGm4',
				saved_date : 64,
				psa_type : 'UlfxhLYEAJHMCNXd',
			),
			via_bot_id : -4577691973579425989,
			via_business_bot_id : 1646549303136386507,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 81,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 87,
				quote_text : 'eQuPlhYDaoqKvWT4',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 0,
				todo_item_id : 74,
			),
			date : 23,
			message : 'fXHdio7rwTyQqhG3',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 54,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 1,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 57,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 8,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 20,
					language : 'z29XW4nfQ1jAepcq',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 67,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : -426995023138946508,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 77,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 7,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 98,
					document_id : 1686600058965067645,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
			),
			views : 73,
			forwards : 66,
			replies : $client->messageReplies(
				comments : true,
				replies : 54,
				replies_pts : 12,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 3232340415947867607,
				max_id : 81,
				read_max_id : 15,
			),
			edit_date : 38,
			post_author : 'HNwhQOsd59qTZyuW',
			grouped_id : -7778100003557631703,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6vnFW4uiEzKRMecN',
					reason : 'T5riXMQIBSy8WdVJ',
					text : 'oxjcTzagSt2DX5IU',
				),
			),
			ttl_period : 86,
			quick_reply_shortcut_id : 86,
			effect : 8608969345807416777,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'oOQUaji9FReIAhN7',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 59,
			paid_message_stars : -8415335130084216690,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 70,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 55,
			from_id : $client->peerUser(
				user_id : 743947256341911637,
			),
			peer_id : $client->peerUser(
				user_id : -6330437017727193729,
			),
			saved_peer_id : $client->peerUser(
				user_id : 4224163805391117971,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 82,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 62,
				quote_text : 'cvdE1gBqrQKGOAHs',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 1,
				todo_item_id : 58,
			),
			date : 35,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 2,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(...),
			),
			pts : 58,
			pts_count : 76,
		),
		$client->updateMessageID(
			id : 48,
			random_id : -6146063756470616101,
		),
		$client->updateDeleteMessages(
			messages : array(67),
			pts : 99,
			pts_count : 26,
		),
		$client->updateUserTyping(
			user_id : -8161455994031528204,
			top_msg_id : 41,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -2684364747850022536,
			from_id : $client->peerUser(
				user_id : -2648181176264534410,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -37195470106082695,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -1860114105736485063,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -1053213437887746930,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 11,
			device : 'X4vNoegJUVH7w5i3',
			location : 'rjLG3tAQkCPv69SB',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 2875745863955298023,
				chat_id : 24,
				date : 19,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 9,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 36,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 62,
			),
			date : 79,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 67,
			max_date : 33,
			date : 63,
		),
		$client->updateChatParticipantAdd(
			chat_id : -2516466650730177762,
			user_id : -2346366742523926620,
			inviter_id : 8698051946445544226,
			date : 34,
			version : 74,
		),
		$client->updateChatParticipantDelete(
			chat_id : 8512763019524458042,
			user_id : -1533219031786871503,
			version : 53,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 23,
					ip_address : '127.0.0.1',
					port : 96,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 71,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 77,
			type : 'A5x9qT1gYpMBnO04',
			message : 'FNjoGVMsfh9TtOYW',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 35,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 1,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 12,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 36,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 37,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 56,
					language : 'Rxz4qfDvojK7wJWO',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 73,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : -7951357953550583974,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 59,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 66,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 45,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 64,
					document_id : -3636029503737893099,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-2781421626892227775),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-3465637703360340873),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(1236231244200501083),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5930369658174184328),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -8366621625182051175,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 22,
			peer : $client->peerUser(
				user_id : -220306066544274192,
			),
			top_msg_id : 90,
			max_id : 71,
			still_unread_count : 61,
			pts : 20,
			pts_count : 53,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 8255330026675650669,
			),
			max_id : 8,
			pts : 28,
			pts_count : 30,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -8078267128124072930,
				url : 'https://docs.liveproto.dev',
			),
			pts : 78,
			pts_count : 5,
		),
		$client->updateReadMessagesContents(
			messages : array(91),
			pts : 42,
			pts_count : 63,
			date : 54,
		),
		$client->updateChannelTooLong(
			channel_id : -5535439500609446962,
			pts : 75,
		),
		$client->updateChannel(
			channel_id : -8748987862840185144,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(...),
			),
			pts : 17,
			pts_count : 32,
		),
		$client->updateReadChannelInbox(
			folder_id : 63,
			channel_id : -3614748806982607663,
			max_id : 12,
			still_unread_count : 50,
			pts : 16,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 4333180436822906271,
			messages : array(81),
			pts : 14,
			pts_count : 21,
		),
		$client->updateChannelMessageViews(
			channel_id : -2063963708831015131,
			id : 28,
			views : 48,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -5873711919660074455,
			user_id : 4669896558256017048,
			is_admin : true,
			version : 63,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(6303531937925073723),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8516145934568192497,
			user_id : 5691639574735580286,
			query : 'Pp57EYRuvZCMSc6q',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'Ntowdygaz1946nVH',
		),
		$client->updateBotInlineSend(
			user_id : -6887674401806348621,
			query : '2AELtiW0zMw8q5Jl',
			geo : $client->geoPointEmpty(),
			id : 'SeM4DEJ0NlqW9YLx',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 80,
				id : 5653211292094761572,
				access_hash : -2109991533146633126,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 5,
				peer_id : $client->peerUser(...),
			),
			pts : 40,
			pts_count : 25,
		),
		$client->updateBotCallbackQuery(
			query_id : 4309967397649223648,
			user_id : -5145855518031834833,
			peer : $client->peerUser(
				user_id : 5139519553508851049,
			),
			msg_id : 42,
			chat_instance : 4374661278507671766,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'ATLENqb3SknlaIfv',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 77,
				peer_id : $client->peerUser(...),
			),
			pts : 66,
			pts_count : 27,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5475687546428198423,
			user_id : -7755319477163751489,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 91,
				id : -6368390738852975002,
				access_hash : -5904233419486232480,
			),
			chat_instance : 5267532418050224091,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'PSknmTO8wQZsjXHy',
		),
		$client->updateReadChannelOutbox(
			channel_id : -730937246790870832,
			max_id : 49,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 5107638867011494033,
			),
			top_msg_id : 29,
			saved_peer_id : $client->peerUser(
				user_id : 1984959242324987163,
			),
			draft : $client->draftMessageEmpty(
				date : 48,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6480168756511699154,
			webpage : $client->webPageEmpty(
				id : 6038456365909488798,
				url : 'https://docs.liveproto.dev',
			),
			pts : 38,
			pts_count : 27,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 31,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 96,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 38,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'v4oHXLUrgYCQOkD8',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -4950206208017853183,
			data : $client->dataJSON(
				data : 'Q0Y4LvnH6NgIpCcy',
			),
			timeout : 0,
		),
		$client->updateBotShippingQuery(
			query_id : 3626888593972816585,
			user_id : -1485955466873865713,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'QvdLeryZ3JkG8iHb',
				street_line2 : 'CtjQGwNmnrDldKko',
				city : 'i1n9fRZsDBTbwcYX',
				state : 'VQ0yoUHMwCYKvZOk',
				country_iso2 : 'CnX1pIRmVF9Y3ude',
				post_code : 'WaIP5Ob86Ct2VA3u',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -7627483972016694096,
			user_id : 2215972634097002702,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'if3OMVpbQUXhgHT5',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'QFnKxNaPMqJCskft',
			currency : 'UtRoGaTK6YHsuEDL',
			total_amount : 2806777227904827183,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -3659223245868387256,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'FpJ32q5lj6g01DBn',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'mhTjbX5wguyJHEx0',
				from_version : 75,
				version : 50,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7602187857857251992,
			top_msg_id : 25,
			saved_peer_id : $client->peerUser(
				user_id : -8403036851420920952,
			),
			messages : array(27),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 4774078443243051294,
			available_min_id : 66,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -4834622114028142736,
			),
		),
		$client->updateMessagePoll(
			poll_id : -5977038249622039471,
			poll : $client->poll(
				id : -2653542467977611741,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 19,
				close_date : 4,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 43,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : '2gxbNQh7wz83cUYk',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 6011374666448492851,
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
				until_date : 58,
			),
			version : 83,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 89,
				),
			),
			pts : 20,
			pts_count : 19,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 2993562244097797865,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 83,
				request_chat_title : 'qrBgotK4SY5X6ZGl',
				request_chat_date : 26,
				business_bot_id : 1186750854078614971,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 5777630544027745842,
				registration_month : '3OwB06zMjIvigSxJ',
				phone_country : '+1234567890',
				name_change_date : 5,
				photo_change_date : 76,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 46,
					distance : 81,
				),
				$client->peerSelfLocated(
					expires : 46,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -4475565443674083937,
			),
			messages : array(62),
			sent_messages : array(27),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 1150665415641542253,
				access_hash : 6440322897948948171,
				slug : 'OCeckRS6GMn1Epx9',
				title : 'TUboHj20J1kCR96D',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'vU1lROS2iZqoAGFE',
				installs_count : 62,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -5794443095253240424,
			),
			msg_id : 18,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -5231569432083438150,
			peer : $client->peerUser(
				user_id : -3287630533801815173,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 93,
		),
		$client->updateDialogFilter(
			id : 67,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 62,
				title : $client->textWithEntities(...),
				emoticon : 'yVuYGLxBSDQW91fn',
				color : 96,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(37),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2794750603480977742,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 7645317934792601045,
			id : 12,
			forwards : 95,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 5124188499091327910,
			top_msg_id : 66,
			read_max_id : 40,
			broadcast_id : 3250470925334379626,
			broadcast_post : 65,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -3896053218088587629,
			top_msg_id : 78,
			read_max_id : 95,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 7308535109461943996,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -29753133206882282,
			top_msg_id : 49,
			from_id : $client->peerUser(
				user_id : 8426507000400732166,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7843316851775861838,
			),
			messages : array(42),
			pts : 16,
			pts_count : 15,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -1598806464647005668,
			messages : array(39),
			pts : 19,
			pts_count : 40,
		),
		$client->updateChat(
			chat_id : -8671020123565383274,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -657181409665665011,
				access_hash : 281682389982249954,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 33,
					active_date : 30,
					source : 94,
					volume : 79,
					about : 'fL6tBaISh4KdXGrc',
					raise_hand_rating : 4560563958109375896,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 60,
		),
		$client->updateGroupCall(
			chat_id : -1303639385028202784,
			call : $client->groupCallDiscarded(
				id : 2180798146324777422,
				access_hash : 3748879008020691515,
				duration : 49,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -1144458783203275208,
			),
			ttl_period : 97,
		),
		$client->updateChatParticipant(
			chat_id : -7371145671616647687,
			date : 9,
			actor_id : 3622280589349825384,
			user_id : 8312244888316229817,
			prev_participant : $client->chatParticipant(
				user_id : 3908235671327081685,
				inviter_id : -5934368859411146091,
				date : 18,
			),
			new_participant : $client->chatParticipant(
				user_id : -7851938259245007213,
				inviter_id : 7801627935127194031,
				date : 91,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'bfkNJyv28lpmsL7M',
				admin_id : 6199750397675306295,
				date : 62,
				start_date : 51,
				expire_date : 98,
				usage_limit : 50,
				usage : 22,
				requested : 53,
				subscription_expired : 17,
				title : 'p4RJ05SLNMcKWVdA',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 29,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -3260981610944180779,
			date : 47,
			actor_id : 1929643464605381721,
			user_id : 875054399980728306,
			prev_participant : $client->channelParticipant(
				user_id : -4563565748342453008,
				date : 5,
				subscription_until_date : 4,
			),
			new_participant : $client->channelParticipant(
				user_id : -8803896618975046591,
				date : 61,
				subscription_until_date : 91,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'TsMZLrPfj3St2WDQ',
				admin_id : 7834405447013915560,
				date : 24,
				start_date : 2,
				expire_date : 53,
				usage_limit : 76,
				usage : 56,
				requested : 48,
				subscription_expired : 13,
				title : 'o2CmIWBADjL8Y4yM',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 86,
		),
		$client->updateBotStopped(
			user_id : 1385650961904573195,
			date : 15,
			stopped : false,
			qts : 39,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'H7rgZyPA2oeYq3nC',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5624270084079451810,
			),
			bot_id : 4103831509080429084,
			commands : array(
				$client->botCommand(
					command : 'ICwyPu9tUabrdeoq',
					description : 'a9RIldr2T3LJMjtE',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -7134685195464105927,
			),
			requests_pending : 14,
			recent_requesters : array(-7167831844828370082),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -5679592916466883455,
			),
			date : 51,
			user_id : 5771325613923675619,
			about : 'gnSK2lxNqO36DvhC',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'mt19RdkoIZwJp6Bf',
				admin_id : 3265594215262262057,
				date : 91,
				start_date : 38,
				expire_date : 58,
				usage_limit : 12,
				usage : 68,
				requested : 65,
				subscription_expired : 76,
				title : 'Ggn8baxZ6B9hWPLl',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 54,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -6852755675405353643,
			),
			msg_id : 15,
			top_msg_id : 45,
			saved_peer_id : $client->peerUser(
				user_id : 5873030077657862510,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 6219017321094882867,
		),
		$client->updateBotMenuButton(
			bot_id : 7208719392187298862,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 3356266412700308932,
			),
			msg_id : 22,
			transcription_id : 3682034016095837773,
			text : 'DslznjhVAPCyiqNE',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -6459881914072640552,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 5189068629569699425,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -2099231430482200362,
			),
			msg_id : 4,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 91,
					h : 20,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 16,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 8120540733425331682,
			topic_id : 56,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 8819041668285733965,
			order : array(73),
		),
		$client->updateUser(
			user_id : 2507731815151873839,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -8434340825141172526,
			),
			story : $client->storyItemDeleted(
				id : 16,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -8758227477180902716,
			),
			max_id : 77,
		),
		$client->updateStoryID(
			id : 8,
			random_id : -632400209556807342,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 55,
				cooldown_until_date : 99,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2763376049544147732,
			),
			story_id : 64,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5617853076202442106,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'hsrtiInXuNY6CTZ2',
				user_id : 8723857127069580610,
				giveaway_msg_id : 61,
				date : 50,
				expires : 76,
				used_gift_slug : 'cdqkF9pANEDTVCjr',
				multiplier : 100,
				stars : -4079993415995021241,
			),
			qts : 92,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 2471321228684886182,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 3858547179773560090,
			),
			wallpaper : $client->wallPaper(
				id : 735073006975451534,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 3366651078604805031,
				slug : 'noFfDirJWdm48I5R',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -6781372508907403454,
			),
			msg_id : 94,
			date : 76,
			actor : $client->peerUser(
				user_id : 8787989850192460779,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'tNYJI6TB9rSiQ3mq',
				),
				$client->reactionCustomEmoji(
					document_id : 407132331055042705,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'KXWVZz2wAdlnejCU',
				),
				$client->reactionCustomEmoji(
					document_id : 6857870429037221440,
				),
				$client->reactionPaid(),
			),
			qts : 43,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -5481066493139553389,
			),
			msg_id : 49,
			date : 61,
			reactions : array(
				$client->reactionCount(
					chosen_order : 16,
					reaction : $client->reactionEmpty(...),
					count : 85,
				),
			),
			qts : 40,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 4,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'tUGXcm8RIgDOzvaL',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 17,
					shortcut : 'CkypNoSdKA5OZE6W',
					top_message : 80,
					count : 13,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 16,
				shortcut : 'Wq52SMgJdeUADsEO',
				top_message : 34,
				count : 63,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 63,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 19,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 45,
			messages : array(12),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'exaqPFLUhQ3RsSyO',
				user_id : -6818025026117019572,
				dc_id : 56,
				date : 12,
				rights : $client->businessBotRights(...),
			),
			qts : 38,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'Z2r5TUBEpogwFh6l',
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(...),
			),
			qts : 86,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'Djhw3FCl42pk067f',
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 58,
				peer_id : $client->peerUser(...),
			),
			qts : 25,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'X1A06lHhePFmJ4NM',
			peer : $client->peerUser(
				user_id : -9059048267410430646,
			),
			messages : array(57),
			qts : 94,
		),
		$client->updateNewStoryReaction(
			story_id : 15,
			peer : $client->peerUser(
				user_id : 8830669160423794646,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -3201989250958941720,
				nanos : 67,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -579890537899704641,
			user_id : -8968815088311294656,
			connection_id : 'drpCTE27P1Fajghu',
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 3763904133594622033,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -6986225091574989080,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 49,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 8191981613835281771,
			payload : '8cSsJIe5oHR0wEdN',
			qts : 52,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 71,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 7258277177241175458,
				access_hash : 5852250364215212097,
			),
			sub_chain_id : 95,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 20,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 949854378434536268,
			saved_peer_id : $client->peerUser(
				user_id : 1619735129917140076,
			),
			read_max_id : 6,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2424733639295420652,
			saved_peer_id : $client->peerUser(
				user_id : -362571745316763303,
			),
			read_max_id : 15,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -3114780644764485408,
			saved_peer_id : $client->peerUser(
				user_id : 7330433355311877165,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 86,
			peer : $client->peerUser(
				user_id : 6669602886861543064,
			),
			topic_id : 73,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 5268621520771074932,
				access_hash : -3577478530917376499,
			),
			from_id : $client->peerUser(
				user_id : -1932223053457676857,
			),
			random_id : 802334779465648515,
			message : $client->textWithEntities(
				text : 'lUFG6wOKkmSfDyCW',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -7453745517744770076,
			text : 'C7QDgqaWZXsw6SOL',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 1965221849046406386,
			payload : 'uvYTcSgn1JQhIpBU',
			until_date : 13,
			qts : 25,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -4850130524447321774,
				access_hash : -2605560975616677609,
			),
			from_id : $client->peerUser(
				user_id : -7583253573664971864,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 5180727091471238077,
			),
			order : array(20),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2374405751196513265,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2583136503939088945,
			title : 'djkuqfnchWbRgl8M',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 99,
			version : 71,
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
			id : 8322411510784241583,
			title : 'FHi1tBzd8IgOpeuy',
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
			id : -594563871496017455,
			access_hash : 2297594482897586594,
			title : 'MK2xBzkYlcbS4CUe',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uQVxwygvd3L1pOTK',
					reason : 'Pm5gyejZrpCi0TFs',
					text : 'Tw4sRFJPBYnKVZ8h',
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
				until_date : 33,
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
				until_date : 68,
			),
			participants_count : 43,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 99,
				background_emoji_id : 5389254202751023769,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -7496371380894654586,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 43,
			subscription_until_date : 42,
			bot_verification_icon : -5198352738793242948,
			send_paid_messages_stars : 7407486517003638506,
			linked_monoforum_id : 4348151916763247025,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3358852538627403256,
			access_hash : -4655081980583130238,
			title : 'GnmEYyexiOc5hPvk',
			until_date : 11,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6396899873443805217,
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
			id : 3316661838953021589,
			access_hash : -6231112949555858215,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'J50xznlLm7AytFHW',
					reason : 'xjLHGBFKrVWdvPlA',
					text : '0v9g6Q1UThkl8JYf',
				),
			),
			bot_inline_placeholder : 'fTVzsKN514kqwgPL',
			lang_code : 'bdxngZTCz3L7PqXf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 566537353068901230,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -6856878779912789212,
			),
			bot_active_users : 74,
			bot_verification_icon : -8115160931101722524,
			send_paid_messages_stars : 8667215826981176174,
		),
	),
);
```