# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 222

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(
					user_id : -8398847978980306505,
				),
			),
			pts : 86,
			pts_count : 28,
		),
		$client->updateMessageID(
			id : 96,
			random_id : -7854162940307121740,
		),
		$client->updateDeleteMessages(
			messages : array(23),
			pts : 97,
			pts_count : 40,
		),
		$client->updateUserTyping(
			user_id : -2926245502787773386,
			top_msg_id : 92,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -1019318474277791676,
			from_id : $client->peerUser(
				user_id : 8492089360627779378,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 3541134210294089568,
				self_participant : $client->chatParticipant(
					user_id : -3654499906030846084,
					inviter_id : -6497988696853822569,
					date : 25,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -4584976054806757835,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -7021512791570798985,
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
			date : 55,
			device : '9TUtakjRuNw7BiZS',
			location : 'chOlFbPHzKZpI1om',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 2620506689548079742,
				chat_id : 100,
				date : 80,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 87,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 98,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 77,
			),
			date : 32,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 86,
			max_date : 8,
			date : 87,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1419709782316808011,
			user_id : 7714696699091937402,
			inviter_id : -8008355090074937351,
			date : 0,
			version : 22,
		),
		$client->updateChatParticipantDelete(
			chat_id : -4238033659673400905,
			user_id : 8120486820129461979,
			version : 66,
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
					id : 74,
					ip_address : '127.0.0.1',
					port : 60,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 2837909524897414613,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 9,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 93,
			type : 'igmzho3TRseOfv4Q',
			message : 'ixZSBpfKFVmbw38L',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 14,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 76,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 97,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 100,
					language : 'aVlZEGQTpSWFRd2f',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 14,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : -7876382946902403708,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 67,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 1,
					document_id : 8411406999269217231,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 72,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6717523730348084563),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-3491528368443163852),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(2181410479762662182),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(266572425115416627),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -5674645128415304141,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 43,
			peer : $client->peerUser(
				user_id : -3380834604461074833,
			),
			top_msg_id : 52,
			max_id : 76,
			still_unread_count : 87,
			pts : 2,
			pts_count : 19,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -7007929998316587358,
			),
			max_id : 19,
			pts : 26,
			pts_count : 29,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 5164828333577639163,
				url : 'https://docs.liveproto.dev',
			),
			pts : 42,
			pts_count : 25,
		),
		$client->updateReadMessagesContents(
			messages : array(32),
			pts : 54,
			pts_count : 100,
			date : 97,
		),
		$client->updateChannelTooLong(
			channel_id : 5275984869770614890,
			pts : 59,
		),
		$client->updateChannel(
			channel_id : 5055060399024768057,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(
					user_id : 4004984566155007788,
				),
			),
			pts : 66,
			pts_count : 22,
		),
		$client->updateReadChannelInbox(
			folder_id : 25,
			channel_id : 748767466040796448,
			max_id : 52,
			still_unread_count : 20,
			pts : 64,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 3270826814976282770,
			messages : array(95),
			pts : 35,
			pts_count : 17,
		),
		$client->updateChannelMessageViews(
			channel_id : 8488876539197054143,
			id : 54,
			views : 69,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 5907314265181531823,
			user_id : -1499684233648805469,
			is_admin : true,
			version : 77,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 68,
					id : -4634379429789958739,
					access_hash : 5815593377830715037,
					title : 'edUDYg5WKsRbzBa9',
					short_name : '2qS1jvcFIW309CPL',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 93,
					thumb_version : 47,
					thumb_document_id : -1343547384210277612,
					count : 18,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'ifRCD579ZdnKEI6X',
						documents : array(1926978658970952246),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 3604722193647635907,
						keyword : array('Ej19IYfwSy6FctVZ'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 8833459416720324345,
					),
					$client->document(
						id : 6848006188749010683,
						access_hash : -1403938655592653702,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 33,
						mime_type : 'n2Nbe7tUgfK8SMsk',
						size : -2050911939336477161,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 74,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(7973466285315718175),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 7892063853290608094,
			user_id : -940229166173423270,
			query : 'HGnOEgwc96I5sb1d',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '95FtgPWpnVrw0ov1',
		),
		$client->updateBotInlineSend(
			user_id : -4704768901430005208,
			query : 'YV092zlQRHgcLDrA',
			geo : $client->geoPointEmpty(),
			id : 'SXk0C9VvDOqx5PBM',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 93,
				id : 6910641579805417415,
				access_hash : -2755541682511336477,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : -7914445932697926929,
				),
			),
			pts : 11,
			pts_count : 60,
		),
		$client->updateBotCallbackQuery(
			query_id : -2981128599747018782,
			user_id : 8811891835353139677,
			peer : $client->peerUser(
				user_id : -4727049266970423769,
			),
			msg_id : 33,
			chat_instance : -7611025264759080474,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'WLlwo0bRJOxeh4d1',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : -1382186357777638694,
				),
			),
			pts : 16,
			pts_count : 59,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5411558297191729869,
			user_id : -140103220732756168,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 0,
				id : 7206780861552152359,
				access_hash : 6047791175328333983,
			),
			chat_instance : 3345288530883815049,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'YropUNASuPtHqiKn',
		),
		$client->updateReadChannelOutbox(
			channel_id : 8016676395909654507,
			max_id : 51,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 1858881119119980229,
			),
			top_msg_id : 95,
			saved_peer_id : $client->peerUser(
				user_id : -9087184787810592713,
			),
			draft : $client->draftMessageEmpty(
				date : 33,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 7396419018770014271,
			webpage : $client->webPageEmpty(
				id : -3024723580982015643,
				url : 'https://docs.liveproto.dev',
			),
			pts : 38,
			pts_count : 38,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 65,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6120896672815926787,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 62,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 6925315088658534643,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 100,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'H1wAm6qLohbIfRrx',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2334354499459526313,
			data : $client->dataJSON(
				data : 'JKZB6CgwdVrntqY4',
			),
			timeout : 53,
		),
		$client->updateBotShippingQuery(
			query_id : 592059865647951473,
			user_id : 8696877531947958582,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'Sj3NkI5rJDPQgiCT',
				street_line2 : 'zbcL9lOPVNGdqoUg',
				city : 'PqKaZWHLDRn9tQsO',
				state : 'PG4EprUuczLwe2jJ',
				country_iso2 : 'HeRb58Nu02QFaqpZ',
				post_code : 'y2XDFM3jvapSmoTY',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 5517851980141981532,
			user_id : 6811700471172063922,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'bEaAwUpxCOn0S3hq',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'sMizyhYc3D6gdajl',
					street_line2 : 'fpW5P3DInTgtAvMC',
					city : '5xACMwNRZcTLVDjE',
					state : 'f5j8LAzUwZv4srnP',
					country_iso2 : 'UcT8qv3Co6uSIQjL',
					post_code : 'r1cWZXlt8xTvVIOR',
				),
			),
			shipping_option_id : 'L7sjJUC3X98urolP',
			currency : 'tCdBqAnE1DMvag0x',
			total_amount : 8625492872890978167,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -3849476247594676240,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'ArLE7PsbgiHXpNWV',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'yCdHuEeM4fFajkXG',
				from_version : 36,
				version : 93,
				strings : array(
					$client->langPackString(
						key : 'bn1hAN93JOfHiPgj',
						value : 'oSvEGVXTBkU2g9zP',
					),
					$client->langPackStringPluralized(
						key : 'Kfi6dPrUB0YQ3Nxp',
						zero_value : 'rZUJWuXdSQIK2l7V',
						one_value : 'eMEbJgnj2yLVat6Y',
						two_value : '2L5u6R4QdpGHWXE0',
						few_value : 'lkPmvTV3tKOqfnD9',
						many_value : 'NHX1J9skG78cbnSE',
						other_value : 'JbSWxjpy7OML1ZGU',
					),
					$client->langPackStringDeleted(
						key : 'iqhLTagd7MJjEfzP',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 8122540416459956443,
			top_msg_id : 60,
			saved_peer_id : $client->peerUser(
				user_id : -3203447358614282664,
			),
			messages : array(1),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 4090798811917500105,
			available_min_id : 29,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -3864499605764467139,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 1836306381038260179,
			),
		),
		$client->updateMessagePoll(
			poll_id : 6906372569991719953,
			poll : $client->poll(
				id : 528209596578147454,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'aP2kM37otyiYmrs4',
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 44,
				close_date : 70,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 6,
					),
				),
				total_voters : 63,
				recent_voters : array(
					$client->peerUser(
						user_id : 439990656406255592,
					),
					$client->peerChat(
						chat_id : -8311914561361674922,
					),
					$client->peerChannel(
						channel_id : 3796070483582499385,
					),
				),
				solution : 'eQzAsgvlYRkdGrmB',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 43,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 20,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 76,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 44,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 59,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 9,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 90,
						language : 'vkWO9UTlE7BPxgF1',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 17,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : 7230728343504046558,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 32,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 62,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 4,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 39,
						document_id : 3391042011954826449,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 7669125769921854588,
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
				until_date : 44,
			),
			version : 52,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 7616375586450841370,
					),
					folder_id : 59,
				),
			),
			pts : 82,
			pts_count : 73,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5827745134203003229,
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
				geo_distance : 18,
				request_chat_title : 'F31czvBJ6V0HdjZ4',
				request_chat_date : 90,
				business_bot_id : 5135090087424433218,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -6614040756072891995,
				registration_month : '4UTd98bv3wmQKZur',
				phone_country : '+1234567890',
				name_change_date : 76,
				photo_change_date : 38,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 1866941718314049921,
					),
					expires : 85,
					distance : 11,
				),
				$client->peerSelfLocated(
					expires : 66,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 29,
				peer_id : $client->peerUser(
					user_id : -6485977291749192080,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -7110525971445019633,
			),
			messages : array(1),
			sent_messages : array(73),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 579313021929672999,
				access_hash : 1339096332874183209,
				slug : 'mDOzcFNksGvuSYaM',
				title : 'TIAkHz3Vxnjw6msf',
				document : $client->documentEmpty(
					id : -5085208390165195708,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 89,
						outbox_accent_color : 7,
						message_colors : array(74),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'pZaREdve7NDGbck1',
				installs_count : 73,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -4551974445836544114,
			),
			msg_id : 7,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 4812862919312391707,
			peer : $client->peerUser(
				user_id : -8213333474311819220,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 80,
		),
		$client->updateDialogFilter(
			id : 5,
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
				id : 71,
				title : $client->textWithEntities(
					text : 'VRk5CrcWg2xisq47',
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
				emoticon : 'LVy1zmReJY8EcoFd',
				color : 52,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(58),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 5161457907453517395,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 4163668051879089864,
			id : 30,
			forwards : 55,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -5324011684570366553,
			top_msg_id : 19,
			read_max_id : 28,
			broadcast_id : 1458583203543160064,
			broadcast_post : 67,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 5361984518439364068,
			top_msg_id : 78,
			read_max_id : 81,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -4851883214006275908,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 1015155785165101331,
			top_msg_id : 5,
			from_id : $client->peerUser(
				user_id : -3771963010863390048,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 2592983657054197186,
			),
			messages : array(84),
			pts : 85,
			pts_count : 32,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 1205739345864850959,
			messages : array(93),
			pts : 20,
			pts_count : 48,
		),
		$client->updateChat(
			chat_id : -5464775832855843434,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 4224136374584964315,
				access_hash : -4733452829038501202,
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
					peer : $client->peerUser(
						user_id : -4738707554435639193,
					),
					date : 44,
					active_date : 88,
					source : 65,
					volume : 98,
					about : 'JGO4RvDkxZCzLnWM',
					raise_hand_rating : -6962699593209491375,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'bsH9xo2jnyh8pzkI',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 29,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'hozn1Vm4R7lFLdMf',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 89,
					),
					paid_stars_total : -3756905760371475217,
				),
			),
			version : 27,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -6521801640194417872,
			),
			call : $client->groupCallDiscarded(
				id : 137828834801523316,
				access_hash : -4907881400285872094,
				duration : 41,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -8525023744217947860,
			),
			ttl_period : 22,
		),
		$client->updateChatParticipant(
			chat_id : 667522013776347874,
			date : 87,
			actor_id : -5722499703145834654,
			user_id : 7156695331374065181,
			prev_participant : $client->chatParticipant(
				user_id : -6803836456285717501,
				inviter_id : 5692785767736257731,
				date : 73,
			),
			new_participant : $client->chatParticipant(
				user_id : 3425281629076200297,
				inviter_id : -3158337261230372811,
				date : 0,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '4CZKMHt7yF20UNLz',
				admin_id : 3074293914716780328,
				date : 62,
				start_date : 41,
				expire_date : 55,
				usage_limit : 98,
				usage : 91,
				requested : 52,
				subscription_expired : 4,
				title : 'uGO1NAtKCIRrhp8E',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 90,
					amount : 7860003823707658395,
				),
			),
			qts : 13,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 8487129601372630582,
			date : 27,
			actor_id : -5214671595775216058,
			user_id : 8350071221278162769,
			prev_participant : $client->channelParticipant(
				user_id : 4171501654132302949,
				date : 41,
				subscription_until_date : 17,
			),
			new_participant : $client->channelParticipant(
				user_id : -2935289984579792517,
				date : 80,
				subscription_until_date : 77,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'haQjIvusBYVfpCXZ',
				admin_id : 7246120218991211619,
				date : 53,
				start_date : 95,
				expire_date : 88,
				usage_limit : 96,
				usage : 39,
				requested : 60,
				subscription_expired : 38,
				title : '01mENxed4PbCWUuh',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 2,
					amount : 7683275496084994897,
				),
			),
			qts : 4,
		),
		$client->updateBotStopped(
			user_id : -687450817434360988,
			date : 95,
			stopped : false,
			qts : 22,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'be4rMjqL7wcaC2XD',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 8496169787335373114,
			),
			bot_id : -8784883069169614258,
			commands : array(
				$client->botCommand(
					command : 'CvuFPIVsOhmjG7w9',
					description : 'Dmydh8YJ96blQ0jw',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 684869138424820021,
			),
			requests_pending : 18,
			recent_requesters : array(-4125135612951166873),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 3852464834313630629,
			),
			date : 12,
			user_id : -4902074594957468127,
			about : 'OLcMINo2w30Tk4mq',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'yLgZQPh5pdENUi3s',
				admin_id : 85833637699840927,
				date : 6,
				start_date : 59,
				expire_date : 32,
				usage_limit : 52,
				usage : 97,
				requested : 46,
				subscription_expired : 40,
				title : 'Bql6CMFJ2WfQHV1y',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 44,
					amount : -8786440304733311646,
				),
			),
			qts : 79,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 3004400723440911983,
			),
			msg_id : 86,
			top_msg_id : 83,
			saved_peer_id : $client->peerUser(
				user_id : -5606414725656343886,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 43,
						reaction : $client->reactionEmpty(...),
						count : 44,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 65,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 49,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 3116930017544095308,
		),
		$client->updateBotMenuButton(
			bot_id : 8101629350827505884,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 4705186991611147549,
			),
			msg_id : 21,
			transcription_id : -8781793494087203613,
			text : 'qMNtPVo49JIcA7a6',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 831336235667413858,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 2192743999826093167,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -1028804516937323370,
			),
			msg_id : 22,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 89,
					h : 44,
					thumb : $client->photoSizeEmpty(
						type : 'Gmwx6pzNO7P3h5In',
					),
					video_duration : 72,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -6917192786114437088,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -1835171860306040296,
			),
			story : $client->storyItemDeleted(
				id : 18,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 8469200890689094852,
			),
			max_id : 20,
		),
		$client->updateStoryID(
			id : 64,
			random_id : 6791894558229370758,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 4,
				cooldown_until_date : 94,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 3819958928220433887,
			),
			story_id : 31,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 3975858684203154080,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '1AzQ4Y3LsybVCdZo',
				user_id : 2643214530925258953,
				giveaway_msg_id : 96,
				date : 49,
				expires : 38,
				used_gift_slug : 'wgCZiW4lPLRrHQ7n',
				multiplier : 22,
				stars : 3634377451839067342,
			),
			qts : 15,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7277677576734430845,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -8235964866494972526,
			),
			wallpaper : $client->wallPaper(
				id : 514457600286058279,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 7907820746182872247,
				slug : 'XRBOwAMVpomkUYgQ',
				document : $client->documentEmpty(
					id : 8907298536546291808,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 32,
					second_background_color : 23,
					third_background_color : 74,
					fourth_background_color : 62,
					intensity : 86,
					rotation : 54,
					emoticon : 'RpASQiVOEmjgfeWU',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7277517010746671183,
			),
			msg_id : 9,
			date : 18,
			actor : $client->peerUser(
				user_id : -156950895598644063,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'deNJRXxkGZ4Ow25U',
				),
				$client->reactionCustomEmoji(
					document_id : 2478129955358499255,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '1KDdLAPkJ5QHIOSr',
				),
				$client->reactionCustomEmoji(
					document_id : -6814104444122324820,
				),
				$client->reactionPaid(),
			),
			qts : 60,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 3784462752518158800,
			),
			msg_id : 36,
			date : 34,
			reactions : array(
				$client->reactionCount(
					chosen_order : 20,
					reaction : $client->reactionEmpty(),
					count : 89,
				),
			),
			qts : 49,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 533636045842704607,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -7391559274021473920,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 72,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'zia0q3eMhDyk8vZf',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 69,
					shortcut : 'p4njU5X3bhKALMQB',
					top_message : 0,
					count : 62,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 34,
				shortcut : 'zunQpaYL5Wm9yXb4',
				top_message : 96,
				count : 39,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 85,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : 2825135869778713163,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 57,
			messages : array(2),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '4GwUclFi1XjghNQp',
				user_id : -6104760892485467937,
				dc_id : 5,
				date : 48,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 22,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'Iwyxfl6zB9bUCtW5',
			message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(
					user_id : 3311802734904243380,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(
					user_id : -7654922797097624075,
				),
			),
			qts : 66,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '64hCZxBpWOuMwiNV',
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : -518446249985347310,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 82,
				peer_id : $client->peerUser(
					user_id : -7777683707429752812,
				),
			),
			qts : 82,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'CL8ZqnhB2M30OTyl',
			peer : $client->peerUser(
				user_id : -2815371507174259316,
			),
			messages : array(14),
			qts : 63,
		),
		$client->updateNewStoryReaction(
			story_id : 6,
			peer : $client->peerUser(
				user_id : -4252308596235117966,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -9035789568291002843,
				nanos : 41,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -1447801278758615389,
			user_id : 2342839039080884104,
			connection_id : 'tDVhc8FInSjKXWqB',
			message : $client->messageEmpty(
				id : 32,
				peer_id : $client->peerUser(
					user_id : -2010879830041827996,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(
					user_id : 4828941959278534316,
				),
			),
			chat_instance : -1830231529048133169,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 5258620533192242119,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -2366677015851981324,
					nanos : 67,
				),
				available_balance : $client->starsAmount(
					amount : -2287648245886613476,
					nanos : 76,
				),
				overall_revenue : $client->starsAmount(
					amount : 5766118130377650653,
					nanos : 59,
				),
				next_withdrawal_at : 49,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -801625862765807147,
			payload : '2egNCI8PtbQUfuMD',
			qts : 5,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 27,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 25,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3005578967798356858,
				access_hash : 750843982301914774,
			),
			sub_chain_id : 6,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 68,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 8457401849443496747,
			saved_peer_id : $client->peerUser(
				user_id : 4837149172455114374,
			),
			read_max_id : 44,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 766804184389557711,
			saved_peer_id : $client->peerUser(
				user_id : 3058030584362473737,
			),
			read_max_id : 2,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -6878178270860118784,
			saved_peer_id : $client->peerUser(
				user_id : 1030616079673531036,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -1946015301279890531,
				access_hash : 1033991399603889487,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 35,
				from_id : $client->peerUser(
					user_id : -6144907110272963790,
				),
				date : 51,
				message : $client->textWithEntities(
					text : 'vJsQyMrHV4mxBb6j',
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
				paid_message_stars : -2236520792642923712,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 3878599549562589942,
				access_hash : 1260259928571995719,
			),
			from_id : $client->peerUser(
				user_id : 7863279419643743231,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 1818391999333919628,
			),
			topic_id : 38,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 4785283884488397704,
			),
			order : array(91),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -8730442157907784664,
				access_hash : -1689671392957365147,
			),
			messages : array(89),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 667229029869297741,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -5718911325730187418,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -750293614876075741,
				bid_date : 54,
				min_bid_amount : -2900692139830158139,
				bid_peer : $client->peerUser(
					user_id : -1807802319926357763,
				),
				acquired_count : 69,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
	),
	users : array(
		$client->userEmpty(
			id : 7222278048800146122,
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
			id : -7486835992559341316,
			access_hash : 364036859319106661,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vYXI36xL7niNpTUm',
					reason : 'PGdvHrNqTcK2J7Xh',
					text : 'lKHpCLAx9MaE6uB7',
				),
			),
			bot_inline_placeholder : 'Tpfwiy8WnHRvaQol',
			lang_code : 'FaZoIqDTbGrfBmkE',
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -5623639090082186689,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 3539424238685342872,
			),
			bot_active_users : 35,
			bot_verification_icon : 3243889012812650121,
			send_paid_messages_stars : -5761277895143883288,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4248066275949164065,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4011110831323977254,
			title : 'kJuT7pGZ4cLqxKNE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 86,
			date : 22,
			version : 97,
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
			id : -1592634384847549310,
			title : 'U5octbP9aNY8pOQx',
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
			id : -9205686665797065353,
			access_hash : 2109957709387765630,
			title : 'qkfId6DEGl7Yw1pS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fIMnRa27lS5OgkZo',
					reason : 'bPT4mfvAUKtDHdeL',
					text : 'xZUiGfLE8IepTbom',
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
				until_date : 29,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 91,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : 8708088226029720935,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -6531767056626513742,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 42,
			subscription_until_date : 91,
			bot_verification_icon : 8968982655201796418,
			send_paid_messages_stars : -3820747046030893261,
			linked_monoforum_id : 7864759117981789559,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -48097729369899712,
			access_hash : 8953841972806211991,
			title : 'a8BqdJfNzuRU6ETI',
			until_date : 92,
		),
	),
	date : 38,
	seq_start : 80,
	seq : 91,
);
```